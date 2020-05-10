<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>TaskBook</title>
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

<main role="main" class="container-fluid">

    <?php if (isset($_SESSION['success'])) : ?>

        <span class="badge badge-success"><?=$_SESSION['success']?></span>

    <?php unset($_SESSION['success']); endif; ?>


    <div class="row">
        <div class="col">
            <a href="editTask.php">Добавить новую задачу</a>
        </div>
    </div>
    <hr style="width: 100%; color: black; height: 1px; background-color:aqua;" />
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <b>Имя пользователя:</b><a href="index.php<?= $uriPage; ?>field=name&sort=asc"><img width="20px" src="img/sortUp.png"></a><a href="index.php<?= $uriPage; ?>field=name&sort=desc"><img width="20px" src="img/sortDown.png"></a>
        </div>
        <div class="col-md-3 col-sm-3">
            <b>Email:</b><a href="index.php<?= $uriPage; ?>field=email&sort=asc"><img  width="20px" src="img/sortUp.png"></a><a href="index.php<?= $uriPage; ?>field=email&sort=desc"><img width="20px" src="img/sortDown.png"></a>
        </div>
        <div class="col-md-3 col-sm-3">
            <b>Текст задачи:</b>
        </div>
        <div class="col-md-3 col-sm-3">
            <b>Статус:</b><a href="index.php<?= $uriPage; ?>field=status&sort=asc"><img  width="20px" src="img/sortUp.png"></a><a href="index.php<?= $uriPage; ?>field=status&sort=desc"><img width="20px" src="img/sortDown.png"></a>
        </div>
    </div>
    <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
    <?php foreach ($tasks as $taskObj) :?>
        <div class="row">
            <div class="col-md-3">

                <?php if ($auth->adminVerify()) { ?>

                    <a class="float-left" href="admin.php?id=<?= $taskObj->id ?>" ><img class="mr-3" width="25px" src="img/edit.png"></a>

                <?php } ?>

                <?= $taskObj->name ?>
            </div>
            <div class="col-md-3">
                <?= $taskObj->email ?>
            </div>
            <div class="col-md-3">
                <?= $taskObj->job ?>
            </div>
            <div class="col-md-3">
                <?= $taskObj->status; ?>
            </div>
        </div>

        <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
    <?php endforeach; ?>

    <!--Pagination-->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php for($i = 1; $i <= $pagination->getPageNums(); $i++) : ?>

                    <li class="page-item"><a class="page-link" href="../../../../../index.php?page=<?= $i . $uri; ?>"><?= $i; ?></a></li>

                <?php endfor; ?>

                <?php if ($pagination->getNextPage()) : ?>
                    <li class="page-item"><a class="page-link" href="../../../../../index.php?page=<?= $pagination->getNextPage() . $uri; ?>">Next</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    <!--endPagination-->
</main>
</html>
