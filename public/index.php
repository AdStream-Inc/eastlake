<?php

error_reporting(E_ALL | E_STRICT);
error_reporting(error_reporting() & ~E_NOTICE);

define('ROOT', dirname(__DIR__));

require ROOT . '/vendor/autoload.php';

$app = require ROOT . '/app/bootstrap.php';

$app->run();