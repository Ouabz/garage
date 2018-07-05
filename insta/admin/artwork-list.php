<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Add artwork</title>
<?php
if(file_exists('./inc/head.inc.php')){
    include('./inc/head.inc.php');
}
?>
</head>
<body>
<div class="container">
	<div class="content">
	<h1>Artwork List </h1>
</div>
    <div class="container d-flex justify-content-end pl-3" id="article">
   <?php
        require("../core/ContentManager.php");
        $cm = new ContentManager();
        echo $cm->getArtworklistAdmin();
        ?>
    
    <form action="menu.php" method="POST" enctype="multipart/form-data">
    
    <button type="submit" class="btn btn-danger ml-2">Back to menu</button>
    </form>
        </div>
</body>
</html>