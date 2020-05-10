<?php
session_start();

include __DIR__ . '/App/autoload.php';

use \App\Models\Task;
use \App\Models\Authorization;
use \App\Db;

$auth = new Authorization(new Db());

$errorName = '';
$errorEmail = '';
$errorTask = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tasks = new Task();

    if (!empty(trim($_POST['name']))) {

        $tasks->name = $_POST['name'];

    } else {

        $errorName = 'Поле Имя не должно быть пустым';

    }

    if (empty(trim($_POST['email']))) {

        $errorEmail = 'Поле Email не должно быть пустым';

    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $tasks->email = $_POST['email'];

    } else {

        $errorEmail = 'Не корректный Email';

    }

    if (!empty(trim($_POST['task']))) {

        $tasks->job = htmlspecialchars($_POST['task']);

    } else {

        $errorTask = 'Поле Задача не должно быть пустым';

    }

    $tasks->status = 'Не выполнено';

    if ($tasks->insert()){

        $_SESSION['success'] = 'Добавлено новое задание';
        header('Location: index.php');

    };
}
    if ($auth->adminVerify()) {

        include __DIR__ . '/App/Views/admin.php';

    } else {

        include __DIR__ . '/App/Views/editTask.php';

    }