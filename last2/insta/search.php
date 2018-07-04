<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dl-type-galerie</title>
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap-reboot.min.css" type="text/css">    
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="./css/fa-brands.css" type="text/css">
    <link rel="stylesheet" href="./css/fa-regular.css" type="text/css">
    <link rel="stylesheet" href="./css/fa-regular.css" type="text/css">
    <link rel="stylesheet" href="./css/fontawesome-all.css" type="text/css">
    
    <link rel="stylesheet" href="./css/custom.css" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js"> </script>
    
    
</head>
<body>
    <div class="container">
        <!-- NAV BAR -->
        <?php
if(file_exists('inc/navbar.inc.php')){
    include('./inc/navbar.inc.php');
}
?>
        
    </div>
<div class="container pb-2 pt-3">
    <div class="alert alert-success" role="alert">
  Vous pouvez rendre votre profile public ou privé  <a href="#" class="alert-link">en cliquant ici</a>.
</div>
    <h1>Rechercher un artiste ou un Poste.</h1>
   
    <!-- PHP CONNEXION PDO SQL -->
    <?php

$bdd = new PDO('mysql:host=localhost;dbname=mokdevst_', 'mokdev','Pokemon91170@');

$articles = $bdd->query('SELECT * FROM artwork ORDER BY art_id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $bdd->query('SELECT * FROM artwork WHERE art_title LIKE "%'.$q.'%" ORDER BY art_id DESC');
   if($articles->rowCount() == 0) {
      $articles = $bdd->query('SELECT art_title FROM artwork WHERE CONCAT(art_title, art_desc) LIKE "%'.$q.'%" ORDER BY art_id DESC');
   }
}
?>
    <!-- FIN DE LA CONNEXION -->
  
<nav class="navbar navbar-light bg-light">
  <form class="form-inline ">
   <input class="form-control mr-sm-2" name="q" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
    <?php if($articles->rowCount() > 0) { ?>
   
   <?php while($a = $articles->fetch()) { ?>
    <div class="container d-flex pl-3 col-md-10">
     <div class="card mr-sm-2" style="width: 18rem;">
            <img class="card-img-top" src="images/<?php echo $a['art_media'] ?>">
            <div class="card-body">

            <h5 class="card-title"> <?php echo $a['art_title'] ?></h5>
            <p class="card-text description"><div class="fixheight"> <?php echo $a['art_desc'] ?></p></div><a href="/insta/ <?php echo $a['art_id'] ?>" class="btn btn-primary">Visit</a>  </div>
    </div> 
   <?php } ?>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>
      