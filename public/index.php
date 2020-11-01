<?php
session_start();
$start = microtime(true);

include __DIR__ . '/../vendor/autoload.php';

use Core\MyApp;

/**
 * SIMON-LIB
 */


$myApp = new MyApp();

$myApp->run();

if (require __DIR__ . '/../config/scriptTime.php') {

    include __DIR__ . '/../templates/time.php';

}