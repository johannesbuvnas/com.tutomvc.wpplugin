<?php
	namespace tutomvc;

	class FilterCommand extends Command
	{
		/* TYPES */
		const META_VALUE               = "tutomvc/filter/meta/value";
		const FORMAT_FILTER_META_VALUE = 'tutomvc/filter/meta/value/%1$s/%2$s';

		/* PUBLIC VARS */
		public $priority          = 10;
		public $acceptedArguments = 1;

		function __construct( $name = NULL, $priority = 10, $acceptedArguments = 1 )
		{
			parent::__construct( $name );
			$this->priority          = $priority;
			$this->acceptedArguments = $acceptedArguments;
		}

		public function register()
		{
			add_filter( $this->getName(), array($this, "preExecution"), $this->priority, $this->acceptedArguments );
		}

		public function remove()
		{
			remove_filter( $this->getName(), array($this, "preExecution"), $this->priority );
		}

		/* STATIC METHODS */
		public static function constructFilterMetaValueCommandName( $metaBoxName, $metaFieldName )
		{
			return sprintf( self::FORMAT_FILTER_META_VALUE, $metaBoxName, $metaFieldName );

			return FilterCommand::META_VALUE . "/" . $metaBoxName . "/" . $metaFieldName;
		}
	}