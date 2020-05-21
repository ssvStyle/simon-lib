<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Кодировка веб-страницы -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Подключаем Bootstrap JS -->
    <script src="public/js/bootstrap.min.js"></script>
    <title>test</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="home">Simon-lib</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="login">Войти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Регистрация</a>
            </li>
        </ul>
    </div>
</nav>

<div style="height: 55px;">
</div>