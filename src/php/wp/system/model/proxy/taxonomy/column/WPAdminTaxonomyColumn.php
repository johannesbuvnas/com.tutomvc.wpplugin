<?php
namespace tutomvc\wp;

class WPAdminTaxonomyColumn extends ValueObject
{
	function __construct( $name, $title )
	{
		parent::__construct( $name, $title );
	}

	/* METHODS */
	public function render( $taxonomy, $termID )
	{
	}
}
