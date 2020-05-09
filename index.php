<?php
session_start();

include __DIR__ . '/autoload.php';

use Core\FrontController;

/**
 * SIMON-LIB
 *
 *
 *
 */

$myApp = new FrontController();

$myApp->run();



