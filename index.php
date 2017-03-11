<?php
// Define Joomla's const
define('_JEXEC', 1);
define('JPATH_BASE', '../');

// Include Joomla classes
require_once JPATH_BASE . 'includes/defines.php';
require_once JPATH_BASE . 'includes/framework.php';

// Include and start the framework
require_once 'vendor/autoload.php';
$app = new Silex\Application();

// Include routes in a separate file
require_once 'routes.php';

// Error handling
error_reporting(E_ALL);
ini_set('display_errors', '1');

// enable the debug mode
$app['debug'] = true;
$app->run();

?>
