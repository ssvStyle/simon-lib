<?php
session_start();

include __DIR__ . '/App/autoload.php';

use App\Models\Authorization;
Use App\Db;
use App\Models\Task;

$error = [];

$auth = new Authorization(new Db());

if ($auth->adminVerify()) {

    if (isset($_GET['id'])) {

        $task = Task::findById($_GET['id']);
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $newTask = new Task();

        if (empty(trim($_POST['name']))) {

            $error['name'] = 'Поле Имя не должно быть пустым';

        }

        if (empty($_POST['email'])) {

            $error['invalidEmail'] = 'Поле Email не должно быть пустым';

        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            $error['invalidEmail'] = 'Не корректный Email';

        }

        if (empty($_POST['task'])) {

            $error['task'] = 'Поле Задача не должно быть пустым';

        }


        if (empty($error)){

            $newTask->id = $_POST['id'];
            $newTask->name = $_POST['name'];
            $newTask->email = $_POST['email'];
            $newTask->job = htmlspecialchars($_POST['task']);
            $newTask->status = $_POST['status'];

            if ($newTask->id == ''){

                $newTask->save();

                $_SESSION['success'] = 'Добавлено новое задание';

            } else {

                $task = Task::findById($newTask->id);

                if ($newTask->job !== $task->job){

                    $newTask->status = $_POST['status'] . '. Отредактировано администратором';

                    $newTask->save();

                } else {

                    $newTask->save();

                }

                $_SESSION['success'] = 'Отредактировано задание';

            }

            header('Location: index.html.twig');

        }

    }

    include __DIR__ . '/App/Views/admin.php';

} else {

    header('Location: login.php');

}