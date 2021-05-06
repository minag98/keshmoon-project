<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
            <img src="img/icon.wheat.png" alt="" class="d-inline-block align-top" >
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navigationMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigationMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="product.table.php" class="nav-link">نمایش محصول ها</a>
                </li>
                <li class="nav-item">
                    <a href="store.table.php" class="nav-link">نمایش انبارها</a>
                </li>
                <li class="nav-item">
                    <a href="product.form.php" class="nav-link">فرم اضافه کردن محصول</a>
                </li>
                <li class="nav-item">
                    <a href="store.form.php" class="nav-link">فرم اضافه کردن انبار</a>
                </li>
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">خانه</a>
                </li>
            </ul>
        </div>
    </div>
</nav>