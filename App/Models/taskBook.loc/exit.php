<?php

session_start();

include __DIR__ . '/App/autoload.php';

use \App\Models\Authorization;
use \App\Db;

$auth = new Authorization(new Db);

$auth->exitAuth();

header('Location: index.php');