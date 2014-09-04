#Tuto MVC


"Tuto MVC" is a WordPress plugin for developers that helps you develop and customize your WordPress installation.


##Features


###PHP Exception Handler

<img src="http://tutomvc.com/wp-content/uploads/2014/09/Exception.png" alt="PHP Exception" title="PHP Exception" />

When an exception is thrown and it's matching the current error_reporting, the error will be logged, backtraced and outputed for easy debugging.

###Log
 
<img src="http://tutomvc.com/wp-content/uploads/2014/09/Screen-Shot-2014-09-04-at-11.42.17.png" alt="PHP Log File" title="PHP Log File" />

Log an event. View the log files from the WP Admin area.
```php
$systemFacade = \tutomvc\Facade::getInstance( \tutomvc\Facade::KEY_SYSTEM );
$systemFacade->logCenter->add( "Save this to log file." );
```

###Meta Boxes

Create custom meta fields for post types and users.

###Notifications

<img src="http://tutomvc.com/wp-content/uploads/2014/09/Screen-Shot-2014-09-04-at-11.47.43.png" alt="WP Admin Notification" title="WP Admin Notification" />

Add notifications in the WP Admin area.
```php
$systemFacade = \tutomvc\Facade::getInstance( \tutomvc\Facade::KEY_SYSTEM );
if(!AppFacade::isProduction()) $systemFacade->notificationCenter->add( "This is <strong>NOT</strong> production environment.", \tutomvc\Notification::TYPE_NOTICE );
```

###Custom Post Types

Use the post type model to create custom post types and add support for custom table culomns.

###Custom Taxonomies**

Use the taxonomy model to create custom taxonomies and add support for custom table culomns.


###Privacy Module

Limit the access to your blog.

###Analytics Module

Add admin settings page to setup your Google Analytics- or Google Tag Manager account.
Then to render:
```php
do_action( \tutomvc\modules\analytics\AnalyticsModule::ACTION_RENDER );
```

###Term Page Module

Do you want to customize the outputted content for a term page?
This module adds the ability to setup a landing pages for terms.

### Other

- **Admin Menu Pages**
- **Admin Settings**
- **Custom User Columns**

##Dependencies

- PHP > 5.3


##Thanks to

- http://backbonejs.org/
