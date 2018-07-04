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
        <!-- CARROUSEL -->
        <body>
        
        <h1>Become artist</h1>
        <form action="core/services.php?action=registerArtist" method="POST" enctype="multipart/form-data">
        <div class="form-row">
    <div class="col">
        <label>Firstname</label>
        <input type="text" name="firstname" placeholder="Enter firstname" class="form-control">
    </div>
    <div class="col">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
         </div>
         <div class="form-row">
    <div class="col">
        <label onclick="locate()">Address</label>
        <label id="location"></label> 
        <input type="text" id="location" name="adress" placeholder="Enter address" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
</div>
<div class="form-row">
    <div class="col">
        <label>City</label>
        <?php
        require("core/ContentManager.php");
        $cm = new ContentManager();
        echo $cm->getCitySelect();
        ?>
        </select>
    </div>
    </div>
    <div class="form-row">
    <div class="col">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
</div>
<div class="form-row">
    <div class="col">
        <label>Lat</label>
        <input type="number" step="any" name="lat" placeholder="Enter your longitude" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="col">
        <label>Lon</label>
        <input type="number" name="lon" placeholder="Enter your lontitude" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
</div>

            <div class="form-row">
    <div class="col">
        <label>Password</label>
        <input type="password" name="password" placeholder="your password became crypt with bcrypt" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="col">
        <label>Repeat Password</label>
        <input type="password" name="repeatpassword" placeholder="repeat your fucking password" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
</div>
<div class="form-row">
        
    <div class="col">
        <label>Avatar</label>
        <input type="file" name="avatar" placeholder="Add picture" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="col">
        <label>Pseudo</label>
        <input type="text" name="pseudo" placeholder="Enter your fucking pseudo" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="g-recaptcha" data-sitekey="6LeP4GAUAAAAAJx4hXUYF0p6yH890dNG9Jpueyxb"></div>
</div>
       
    <div class="d-flex justify-content-end pb-2">
    <button type="submit" class="btn btn-primary mt-2 ml-2">Fucking Register</button>
    
    </form>
<!-- REGISTER -->
<button type="submit" class="btn btn-success mt-2 ml-2">Fucking Login</button>
</div>
</div>
</div>
</body>
    
    <!-- JS -->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script type="text/javascript" src="./js/custom.js"></script>
</body>

</html>