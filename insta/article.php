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
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/custom.css" type="text/css">
    
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
        <!--ALERT -->
        <div class="card">
  <div class="card-header">
    Boutique
  </div>
  <div class="card-body">
    <h5 class="card-title">Achetez vos t-shirt !</h5>
    <p class="card-text">Cliquez sur le lien ci-dessous pour acceder à la boutique de InstaPop</p>
    <a href="#" class="btn btn-primary">Go </a>
  </div>
</div>
    <?php
    if(!empty($_SESSION['email'])){
      echo "Hola Gringos ";
      echo $_SESSION['pseudo'];
      echo $_SESSION['id'];
            echo $_SESSION['firstname'];
    }
    ?>
         
        <div class="container">
      <img src="images/LOGO.png" alt=""> </div>
            </div>
        <!-- LISTE DES 5 DERNIERS ARTISTES INSCRITS -->
 <!--     <h1 class="area"> Last Post: </h1> -->
        <div class="container d-flex justify-content-end pl-3" id="article">

        <?php
        require("core/ContentManager.php");
        $cm = new ContentManager();
        echo $cm->getArtworklist();
        ?>
    </div>
    <div class="container d-flex justify-content-end pl-3">
 
    <!-- JS -->

    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/custom.js"></script>
</body>

</html>