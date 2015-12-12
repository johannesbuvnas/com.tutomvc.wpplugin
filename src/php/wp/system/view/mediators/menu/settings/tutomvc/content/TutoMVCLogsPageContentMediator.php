<?php
namespace tutomvc\wp;

class TutoMVCLogsPageContentMediator extends Mediator
{
	const NAME = "menu/settings/tutomvc/content/logs.php";

	function __construct()
	{
		parent::__construct( self::NAME );
	}

	function onRegister()
	{
		$this->getFacade()->registerCommand( new RenderLogAjaxCommand() );
	}
}