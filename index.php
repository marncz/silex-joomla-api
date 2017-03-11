<?php
// web/index.php
require_once 'vendor/autoload.php';
$app = new Silex\Application();

// Import API's routes
require_once 'routes.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

$app['debug'] = true;
$app->run();

?>
