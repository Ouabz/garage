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
    <title> InstaPop | All post</title>
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/custom.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    
    
</head>
<body>
    <div class="container">
        <!-- NAV BAR -->
        <?php
if(file_exists('inc/navbar.inc.php')){
    include('./inc/navbar.inc.php');
}
?>
        <!-- CARROUSEL -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="" alt="Third slide">
                </div>
            </div>
        </div>
        <!-- LISTE DES 5 DERNIERS ARTISTES INSCRITS -->
        
        <h1 class="area"> All Post: </h1>
        <?php

$bdd = new PDO('mysql:host=localhost;dbname=bdd-insta', 'root','');

$articles = $bdd->query('SELECT art_title FROM artwork ORDER BY art_id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $bdd->query('SELECT art_title FROM artwork WHERE art_title LIKE "%'.$q.'%" ORDER BY art_id DESC');
   if($articles->rowCount() == 0) {
      $articles = $bdd->query('SELECT art_title FROM artwork WHERE CONCAT(art_title, art_desc) LIKE "%'.$q.'%" ORDER BY art_id DESC');
   }
} 
?>
       
    
    </div>
    
   
   <?php require("core/ContentManager.php");
        $cm = new ContentManager();
         echo $cm->getArtworkalllist(); ?>
 
    <!-- JS -->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/custom.js"></script>
</body>

</html>