<?php

use Core\Route;

Route::get('/', 'Home@index');

Route::get('foo', 'Home@show');