<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Site e-commerce</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body >
  <header class="jumbotron text-center m-0 p-5 h-25 bg-dark text-white rounded-0 sticky-top">

    <?php
                      if(!empty($_SESSION['user']['name']) && !empty($_SESSION['user']['password'])) {echo'
                        <div class="">
                        </div
                        <div class="login">
                          <a href="logout.php" class="logout-link col-2 text-center badge badge-light">Me déconnecter</a>
                        </div>
                          ';};
                 ?>

    <h1 class="display-9">Bienvenue dans la boutique</h1>
  </header>

  <main class="  pt-0 pb-0   d-flex justify-content-center align-items-center" >
