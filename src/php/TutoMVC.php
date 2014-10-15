<?php
namespace tutomvc;
// https://github.com/PureMVC/puremvc-as3-multicore-framework/tree/master/src/org/puremvc/as3/multicore/patterns

// DEPENDENCIES
////////////////////////////////////////////////////////////////////////////////////////////////////////////
// require_once realpath( dirname( __FILE__ ) ) . '/utils/ArrayUtil.php';
// require_once realpath( dirname( __FILE__ ) ) . '/utils/FileUtil.php';
////////////////////////////////////////////////////////////////////////////////////////////////////////////

final class TutoMVC
{
	/* CONSTANTS */
	const VERSION = "1.038";
	const NAME = "tutomvc";
	const NONCE_NAME = "tutomvc/nonce";

	const SCRIPT_JS = "tutomvc-core-js";
	const SCRIPT_JS_PATH = "deploy/com.tutomvc.core.js";

	const GIT_REPOSITORY_URL = "https://github.com/johannesbuvnas/com.tutomvc.wpplugin.git";
	const GIT_REPOSITORY_BRANCH = "v2";

	/* STATIC VARS */
	private static $initiated = FALSE;
	private static $_domain = "";
	private static $_wpRelativeRoot = "";
	private static $_documentRoot = "";
	private static $_root = "";
	private static $_src = "";
	private static $_url = "";
	private static $_facadeMap = array();
	private static $_priority = -1;
	public static $loader;

	/* ACTIONS */
	/**
	*	Initializie.
	*/
	public static function initialize()
	{
		if( self::$initiated )
		{
			return FALSE;
		}

		$backtrace = debug_backtrace();
		$caller = $backtrace[0]['file'];

		// Plugin root path
		self::$_root = realpath( dirname( $caller ) );
		// Plugin src path
		self::$_src = realpath( dirname( __FILE__ ) );
		// Figure out domain name
		$wpURL = get_bloginfo( 'wpurl' );
		self::$_domain = parse_url( $wpURL );
		self::$_domain = array_key_exists( "port", self::$_domain ) ? self::$_domain['host'] . ":" . self::$_domain['port'] : self::$_domain['host'];
		// Figure out the root of the WP folder
		self::$_wpRelativeRoot = substr( $wpURL, strpos( $wpURL, self::$_domain ) + strlen( self::$_domain ) );
		// Figure out URL to this plugin
		self::$_documentRoot = FileUtil::filterFileReference( getenv( "DOCUMENT_ROOT" ) );
		self::$_url = $wpURL . FileUtil::filterFileReference( substr( self::$_root,  strripos( self::$_root, self::$_documentRoot ) + strlen( self::$_wpRelativeRoot ) + strlen( self::$_documentRoot ) ) );

		self::requireAll( self::$_src );

		self::$initiated = true;

		// Auto load the system app facade
		TutoMVC::startup( "tutomvc\\SystemFacade", "src/templates/", self::getRoot( "system" ) );

		do_action( ActionCommand::START_UP );

		return TRUE;
	}

	/**
	*	Import application into scope.
	*	@param string $facadeClassReference A reference to the class name which extends the Facade.
	*	@return boolean
	*/
	public static function startup( $facadeClassReference, $templatesDir = "/templates/", $appRoot = NULL )
	{
		if(!self::$initiated)
		{
			die("ERROR! Cannot import application. Tuto Framework hasn't been initialized.");
		}

		if(!$appRoot)
		{
			// The file that called this function will set the root for this app
			$backtrace = debug_backtrace();
			$caller = $backtrace[0]['file'];
			$appRoot = realpath( dirname( $caller ) );
		}

		// Construct and initalize the facade
		$facade = new $facadeClassReference;
		self::$_facadeMap[ $facade->getKey() ] = $facade;
		$facade->vo = new FacadeVO( $appRoot );
		$facade->vo->templatesDir = $templatesDir;
		$facade->onRegister();
		do_action( ActionCommand::FACADE_READY, $facade );
		return $facade;
	}

	/**
	*	Finds all PHP files and require them.
	*/
	public static function requireAll( $path, $ignoredPaths = array() )
	{
		return FALSE;
		return FileUtil::import( $path, $ignoredPaths );
	}

	/* SET AND GET */
	public static function getRoot( $relativePath = NULL )
	{
		return is_null( $relativePath ) ? self::$_root : self::$_root . FileUtil::filterFileReference( "/" . $relativePath );
	}
	public static function getDocumentRoot()
	{
		return self::$_documentRoot;
	}
	public static function getWPRelativeRoot()
	{
		return self::$_wpRelativeRoot;
	}

	public static function getURL( $relativePath = NULL )
	{
		return is_null( $relativePath ) ? self::$_url : self::$_url . FileUtil::filterFileReference( "/" . $relativePath );
	}

	/* PRIVATE METHODS */
	/**
	*	Checks if application has been imported.
	*	@return Boolean
	*/
	private static function hasImportedApplication( $facadeClassReference )
	{
		return class_exists( $facadeClassReference );
	}
}
