<?php
namespace tutomvc;

class MetaBox extends ValueObject implements IMetaBox
{
	/* CONSTANTS */
	const CONTEXT_NORMAL = "normal";
	const CONTEXT_ADVANCED = "advanced";
	const CONTEXT_SIDE = "side";

	const PRIORITY_HIGH = "high";
	const PRIORITY_CORE = "core";
	const PRIORITY_DEFAULT = "default";
	const PRIORITY_LOW = "low";

	/* VARS */
	private $_title;
	private $_maxCardinality;
	private $_supportedPostTypes;
	private $_context;
	private $_priority;
	private $_fieldMap = array();
	private $_conditions = array();


	function __construct( 
		$name, 
		$title, 
		$supportedPostTypes, 
		$maxCardinality = 1, 
		$context = MetaBox::CONTEXT_NORMAL, 
		$priority = MetaBox::PRIORITY_DEFAULT 
	)
	{
		$this->setName( $name );
		$this->setMaxCardinality( $maxCardinality );
		$this->setTitle( $title );
		$this->setSupportedPostTypes( $supportedPostTypes );
		$this->setContext( $context );
		$this->setPriority( $priority );
	}

	/* ACTIONS */
	public function delete( $postID )
	{
		$map = $this->getMetaBoxMap( $postID );
		foreach( $map as $metaBoxMap )
		{
			foreach( $metaBoxMap as $metaVO )
			{
				$metaVO->setValue( NULL );
			}
		}

		return delete_post_meta( $postID, $this->getName() );
	}

	public function addCondition( MetaCondition $condition )
	{
		$this->_conditions[] = $condition;
	}

	/* SET AND GET */
	public function setConditions( $conditions )
	{
		$this->_conditions = $conditions;
	}
	public function getConditions()
	{
		return $this->_conditions;
	}
	
	public function getCardinality( $postID )
	{
		$cardinality = intval( get_post_meta( $postID, $this->getName(), TRUE ) );
		return $cardinality >= 0 ? $cardinality : 1;
	}

	public function getMetaBoxMap( $postID )
	{
		$dp = array();
		$i = $this->getCardinality( $postID );

		while( $i > 0 )
		{
			$i--;
			$dp[ $i ] = $this->getMetaFieldMap( $postID, $i );
		}

		$dp = array_reverse( $dp );

		return $dp;
	}

	public function getMetaFieldMap( $postID, $cardinalityID )
	{
		$dp = array();
		foreach( $this->getFields() as $metaField )
		{
			$metaName = $this->getName() . "_" . $cardinalityID . "_" . $metaField->getName();
			$dp[ $metaField->getName() ] = new MetaVO( $metaName, $postID, $metaField );
		}

		return $dp;
	}

	/* METHODS */
	public function hasMetaKey( $metaKey )
	{
		foreach($this->getFields() as $metaField)
		{
			$pattern = "/".$this->getName()."(_[0-9]_)".$metaField->getName()."/";
			if(preg_match( $pattern, $metaKey )) return TRUE;
		}

		return FALSE;
	}

	public function addField( MetaField $metaField )
	{
		$this->_fieldMap[ $metaField->getName() ] = $metaField;

		return $metaField;
	}

	public function hasField( $name )
	{
		return array_key_exists( $name, $this->_fieldMap );
	}

	public function hasPostType( $postTypeName )
	{
		return in_array( $postTypeName, $this->_supportedPostTypes );
	}

	public function isSingle()
	{
		return $this->getMaxCardinality() == 1;
	}

	/* SET AND GET */
	// public function setFieldValue( $fieldName, $value)
	// {
	// 	if( $this->hasField( $fieldName ) ) return $this->getField( $fieldName )->setValue( $value, $postID );
	// 	return FALSE;
	// }

	// public function getFieldValue( $fieldName )
	// {
	// 	if( $this->hasField( $fieldName ) ) return $this->getField( $fieldName )->getValue( $postID );
	// 	else return NULL;
	// }

	public function getField( $name )
	{
		if( array_key_exists( $name, $this->_fieldMap ) )
		{
			return $this->_fieldMap[ $name ];
		}
		else
		{
			return NULL;
		}
	}

	public function getFieldByMetaKey( $metaKey )
	{
		foreach($this->getFields() as $metaField)
		{
			$pattern = "/".$this->getName()."(_[0-9]_)".$metaField->getName()."/";
			if(preg_match( $pattern, $metaKey )) return $metaField;
		}

		return NULL;
	}

	public function getFields()
	{
		return $this->_fieldMap;
	}

	public function setName( $name )
	{
		parent::setName( $name );

		if(count( $this->getFields() ))
		{
			foreach($this->getFields() as $metaBoxFieldVO)
			{
				$metaBoxFieldVO->setMetaBoxName( $this->getName() );
			}
		}
	}

	public function setTitle( $title )
	{
		$this->_title = $title;
	}
	public function getTitle()
	{
		return $this->_title;
	}

	public function setSupportedPostTypes( $supportedPostTypes )
	{
		$this->_supportedPostTypes = is_array( $supportedPostTypes ) ? $supportedPostTypes : array( $supportedPostTypes );
	}
	public function getSupportedPostTypes()
	{
		return $this->_supportedPostTypes;
	}

	public function setContext( $context )
	{
		$this->_context = $context;
	}
	public function getContext()
	{
		return $this->_context;
	}

	public function setPriority( $priority )
	{
		$this->_priority = $priority;
	}
	public function getPriority()
	{
		return $this->_priority;
	}

	public function setMaxCardinality( $maxCardinality )
	{
		$this->_maxCardinality = $maxCardinality;
	}
	public function getMaxCardinality()
	{
		return $this->_maxCardinality;
	}
}

interface IMetaBox
{
	/* CONSTANTS */
	const CARDINALITY_SINGLE = 1;
	const CARDINALITY_UNLIMITED = -1;

	/* ACTIONS */
	public function getCardinality( $postID );
	public function getMetaBoxMap( $postID );
	public function getMetaFieldMap( $postID, $cardinalityID );

	/* METHODS */
	public function hasPostType( $postTypeName );
	public function hasField( $name );
	public function isSingle();

	/* SET AND GET */
	// public function setFieldValue( $fieldName, $value, $postID );
	// public function getFieldValue( $fieldName, $postID );
	public function getField( $name );
	public function getFields();
	public function setTitle( $title );
	public function getTitle();
	public function setSupportedPostTypes( $postTypes );
	public function getSupportedPostTypes();
	public function setContext( $context );
	public function getContext();
	public function setPriority( $priority );
	public function getPriority();
	public function setMaxCardinality( $maxCardinality );
	public function getMaxCardinality();
}