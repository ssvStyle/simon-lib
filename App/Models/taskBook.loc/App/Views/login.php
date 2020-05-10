<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>TaskBook: Login</title>
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
    <!-- Custom styles for this template
    <link href="navbar-top.css" rel="stylesheet">-->
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="../../../../../index.php">Task Book</a>

            <?php if ($auth->adminVerify()) { ?>

                <?php header('Location: index.php');?>

            <?php } ?>
    </nav>

    <main role="main" class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                    <form method="post" action="login.php">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Логин</label><span class="badge badge-pill badge-warning float-right"><?= $errorLogin; ?></span>
                            <input name="login" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label><span class="badge badge-pill badge-warning float-right"><?= $errorPass; ?></span>
                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </form>
            </div>
        </div>
    </main>

</html>
