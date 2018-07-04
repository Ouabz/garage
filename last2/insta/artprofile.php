<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> InstaPop | Zeus</title>
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
     
        <!-- MESSAGE D'AVERTISSEMENT SI LE 2FA EST PAS ACTIVE -->
       <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="#">2FA</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Activer la validation en deux étapes</h5>
    <p class="card-text">vous ajoutez un niveau de sécurité supplémentaire à votre compte. Vous vous connectez à l'aide d'informations que vous seul connaissez (votre mot de passe) et que vous seul possédez (le code envoyé à votre téléphone).</p>
    <a href="#" class="btn btn-primary">Go Active</a>
  </div>
</div>
        
        
        
    
          
              
  <h5 class="card-header">Zeus</h5>
  <div class="card-body">
      <div class="row">
       <div class="col-md-4">
      <img src="https://picsum.photos/200/300" style="height: 160px; width: 160px;" alt=""/>
      </div>
          <div class="col-md-8">
          <div style="float: right;" class="pull-right">
              <button type="submit" class="btn btn-primary" name="ehmerceee" value="Subscribe">Subscribe</button>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nisl tempor, malesuada libero vitae, ultricies magna. Donec efficitur consequat magna, eu consequat lectus euismod at. Sed fringilla fermentum eros, vitae egestas ipsum feugiat quis. Vivamus venenatis massa eu blandit posuere.</p>
              <?php
require("core/ContentManager.php");
$cm = new ContentManager();
echo $cm->getArtistid($page_id);
?>
          </div>
      </div>
        
  </div>
</div>
    
    
    <div class="container d-flex pl-3 col-md-10">
   
    <!-- JS -->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/custom.js"></script>
</body>

</html>