<?php
  $title = 'Ester';
  $description = ' | Themplate';
  $autor = 'Designioss';
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="author" content="<?php echo $autor; ?>" />
    <!-- Title  -->
    <title><?php echo $title; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />
    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="theme-dark">
    <!-- ========================================= Start loading -->
    <div class="loading">
      <div class="text-center middle">
        <div class="lds-ellipsis">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <!-- End loading =========================================== -->
    <!-- ========================================= Start navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo -->
        <a class="logo" href="#">
          Ester
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#" data-scroll-nav="0">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="1">Sobre mi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="2">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="3">Portafolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="4">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="5">Contactame</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End navbar =========================================== -->
