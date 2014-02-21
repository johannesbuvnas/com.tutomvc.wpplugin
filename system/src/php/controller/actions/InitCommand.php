<?php
namespace tutomvc;

class InitCommand extends ActionCommand
{
	function __construct()
	{
		parent::__construct( "init" );
	}

	function execute()
	{
		wp_register_script( TutoMVC::NAME, NULL );

		if( SystemFacade::DEVELOPMENT_MODE )
		{
			wp_register_style( SystemFacade::STYLE_CSS, $this->getFacade()->getURL( "style.css" ), NULL, TutoMVC::VERSION );
			wp_register_script( SystemFacade::SCRIPT_JS_REQUIRE, $this->getFacade()->getURL( "src/scripts/libs/requirejs/require.js" ), TutoMVC::VERSION );
			wp_register_script( SystemFacade::SCRIPT_JS, $this->getFacade()->getURL( "src/scripts/Main.config.js" ), array( SystemFacade::SCRIPT_JS_REQUIRE, TutoMVC::NAME ), TutoMVC::VERSION, TRUE );
		}
		else
		{
			wp_register_style( SystemFacade::STYLE_CSS, $this->getFacade()->getURL( "style-min.css" ), NULL, TutoMVC::VERSION );
			wp_register_script( SystemFacade::SCRIPT_JS, $this->getFacade()->getURL( "deploy/Main.pkgd.js" ), NULL, TutoMVC::VERSION, TRUE );
		}

		$this->getFacade()->controller->registerCommand( new PrintScriptsCommand() );
	}
}