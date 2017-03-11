<?php
define('_JEXEC', 1);
define('JPATH_BASE', '../');
require_once JPATH_BASE . 'includes/defines.php';
require_once JPATH_BASE . 'includes/framework.php';

require_once 'vendor/autoload.php';
$app = new Silex\Application();



require_once 'routes.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

$app['debug'] = true;
$app->run();

?>
