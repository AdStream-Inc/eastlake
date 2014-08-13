<?php

require '../vendor/autoload.php';

use \Slim\Slim;
use \Slim\Views\Twig;
use \Slim\Views\TwigExtension;

/*
|--------------------------------------------------------------------------
| Create Slim Application
|--------------------------------------------------------------------------
*/

$app = new Slim(array(
  'view' => new Twig(),
  'debug' => false,
  'templates.path' => ROOT . '/app/views',
));

/*
 * SET some globally available view data
 */
$uri = $app->request->getResourceUri();
$rootPath = $app->request->getRootUri() . '/';
$app->view()->appendData(array('uri' => $uri, 'root' => $rootPath));

/*
|--------------------------------------------------------------------------
| Configure Twig
|--------------------------------------------------------------------------
|
| The application uses Twig as its template engine. This script configures
| the template paths and adds some extensions.
|
*/

$view = $app->view();
$view->parserOptions = array(
  'debug' => false,
  'cache' => ROOT . '/app/views/cache',
  'auto_reload' => true
);

$view->parserExtensions = array(
    new TwigExtension(),
    new Twig_Extension_Debug()
);

/*
|--------------------------------------------------------------------------
| Include Application Routes
|--------------------------------------------------------------------------
*/

require 'routes.php';

return $app;