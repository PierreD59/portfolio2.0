<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/normalize.css">
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="public/css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
<header class="navbar-dark">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="./">Portfolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php?page=home">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?page=projet">Mes Réalisations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?page=contact">Contact</a>
        </li>
        </ul>
      <ul class="navbar-nav d-flex justify-content-end mr-3">
        <li class="nav-item">
      <?php 
      if (isset($_SESSION['pseudo'])) {
        ?>
          <a class="nav-link" href="./index.php?page=addProjet">Ajout projet</a>
      <?php } ?>
        </li>
        <li class="nav-item">
      <?php 
      if (isset($_SESSION['pseudo'])) {
        ?>
          <a class="nav-link" href="disconnect.php">Se Deconnecter</a>
      <?php 
    } else {
      ?>
        <a class ="nav-link" href="./index.php?page=admin">Admin</a> 
    <?php
    }
    ?>
        </li>
      </ul>
    </div>
  </nav>
</header>
