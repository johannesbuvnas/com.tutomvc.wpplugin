<?php
	namespace tutomvc\wp\setting;

	/**
	 * Created by PhpStorm.
	 * User: johannesbuvnas
	 * Date: 10/05/15
	 * Time: 08:34
	 */
	class SettingModuleFacade extends \tutomvc\Facade
	{
		const KEY = "tutomvc/modules/setting";

		function __construct()
		{
			parent::__construct( self::KEY );
		}

		function onRegister()
		{
			// Model
			$this->model->registerProxy( new SettingProxy() );
			// View
			// Controller
			$this->controller->registerCommand( new AdminInitAction() );
		}

		/**
		 * @return SettingProxy
		 */
		function getProxy()
		{
			return $this->model->getProxy( SettingProxy::NAME );
		}
	}