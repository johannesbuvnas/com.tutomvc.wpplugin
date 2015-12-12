<?php
	/**
	 * Created by PhpStorm.
	 * User: johannesbuvnas
	 * Date: 12/12/15
	 * Time: 10:17
	 */

	namespace tutomvc\wp;

	class AdminEnqueueScriptsAction extends ActionCommand
	{
		function execute()
		{
			wp_enqueue_style( TutoMVC::NAME, $this->getFacade()->getURL( "dist/css/style.min.css" ) );
		}
	}