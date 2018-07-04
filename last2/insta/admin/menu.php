<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<?php
if(file_exists('./inc/head.inc.php')){
    include('./inc/head.inc.php');
}
?>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<body>
<!-- NAVBAR --> 
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="add-category.php">Add category</a></li>
        <li><a href="add-artiste.php">Add artist</a></li>
        <li><a href="add-artwork.php">Add Artwork</a></li>
      </ul>
    </div>
  </nav>
  <!-- FIN NAV -->
    <?php echo $_SESSION['statut']; ?>
<li></li>
<li></li>
<li></li>
<li></li>

</div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
            
</body>
</html>