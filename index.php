<?php

/**
 * SIMON-LIB
 *
 *
 *
 */

include_once __DIR__ . '/lib/Route.php';

use \lib\Route;

Route::get('foo', 'Home@show');

Route::get('/', 'home@index');