<?php

if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}

include 'config.php';
?>


<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--Argon CSS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!---->
    <title>Login</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <script src="js/vendor/modernizr.js"></script>
</head>

<body>
<!--nav-->
<body class="bg-default">

<!-- Navbar -->
<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../index.html">
                            <img src="../assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse-main" aria-controls="sidenav-main"
                                aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

                <?php
                if (isset($_SESSION['username'])) {
                    $result = $mysqli->query('SELECT * FROM users WHERE id=' . $_SESSION['id']);

                    $result1 = $mysqli->query('SELECT * FROM users WHERE id=' . $_SESSION['id']);
                    ?>
                         <!-- Menu dropdown da nav-->
                           <ul class="navbar-nav ml-auto">
            <ul class="navbar-nav align-items-center d-none d-md-flex" >
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                    <?php
                    if ($result1) {
                        $obj = $result1->fetch_object();
                                            ?>
                                    <img alt="Image placeholder" class="rounded-circle" src="images/<?= $obj->imagem ?>" />
                    <?php } ?>
                </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">
                                    <?= 'Olá ' . $_SESSION['fname']; ?>
                                </span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bem Vindo!</h6>
                        </div>
                        <a href="account.php" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Meu perfil</span>
                        </a>
                        <a href="cart.php" class="dropdown-item">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>Carrinho</span>
                        </a>
                        <a href="orders.php" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Home</span>
                        </a>
                        <?php
                        if($_SESSION["type"]=="admin") {
                        ?>
                        <a href="new_product.php" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Novo Produto</span>
                        </a>
                       <?php } ?>

                        <a href="products.php" class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>Produtos</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="logout.php" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
            </ul>
            <?php

                } else {

                    echo'
                        <!--Produtos-->
    <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="products.php">
                        <i class="ni ni-planet"></i>
                        <span class="nav-link-inner--text">Produtos</span>
                    </a>
                </li>
      
                    ';


                    echo '

                      <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="login.php">
                            <i class="ni ni-single-02"></i>
                            <span class="nav-link-inner--text">Log In</span>
                        </a>
                    </li>
                    ';


                    echo '
   
                      <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="register.php">
                            <i class="ni ni-single-02"></i>
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                   </ul>
                    ';
                }
                ?>
        </div>
    </div>
</nav>
<div class="main-content">