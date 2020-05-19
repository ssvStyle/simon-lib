<?php
session_start();

include __DIR__ . '/App/autoload.php';

use \App\Models\Authorization;
Use \App\Db;

$auth = new Authorization(new Db());

$errorLogin = '';
$errorPass = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if ($auth->loginExist($_POST['login'])) {

        if ($auth->loginAndPassValidation($_POST['login'], $_POST['pass'])) {

            $auth->setAuth();
            header('Location: index.html.twig');

        } else {

            $errorPass = 'Неверный пароль';

        }

    } else {

        $errorLogin = 'Пустое поле или пользователя не существует';
        $errorPass = 'Пустое поле или неверный пароль';

    }

}

include __DIR__ . '/App/Views/login.php';
