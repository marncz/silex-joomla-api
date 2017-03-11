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



require_once 'routes.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

$app['debug'] = true;
$app->run();

?>
