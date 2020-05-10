<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>TaskBook: add and edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template-->
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 justify-content-between">
    <a class="navbar-brand" href="../../../../../index.php">Task Book</a>

    <?php if ($auth->adminVerify()) { ?>
        <div>
            <a href="./admin.php">Admin</a>
            <a href="./exit.php">Выход</a>
        </div>

    <?php } else { ?>

        <a href="./login.php">Войти</a>

    <?php } ?>


</nav>

<main role="main" class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="editTask.php" method="post"  >
                <div class="form-group">
                    <label for="formGroupExampleInput2">Имя</label><span class="badge badge-pill badge-warning float-right"><?= $errorName; ?></span>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label><span class="badge badge-pill badge-warning float-right"><?= $errorEmail; ?></span>
                    <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Задача</label><span class="badge badge-pill badge-warning float-right"><?= $errorTask; ?></span>
                    <textarea class="form-control" name="task" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" name="button" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</main>

</html>
