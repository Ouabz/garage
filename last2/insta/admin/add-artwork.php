<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Add category</title>
<?php
if(file_exists('./inc/head.inc.php')){
    include('./inc/head.inc.php');
}
?>

</head>
<body>    <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script>
$(document).ready(function(e) {
 
  $('#message').keyup(function() {
 
    var nombreCaractere = $(this).val().length;
 
    var nombreMots = jQuery.trim($(this).val()).split(' ').length;
    if($(this).val() === '') {
     	nombreMots = 0;
    }
 
    var msg = ' ' + nombreMots + ' mot(s) | ' + nombreCaractere + ' Caractere(s) / 200';
    $('#compteur').text(msg);
    if (nombreCaractere > 300) { $('#compteur').addClass("mauvais"); } else { $('#compteur').removeClass("mauvais"); }
 
  })
 
});
</script>
    <style>
        .mauvais {
            color: red;
        }
    
    </style>
<div class="container">

    <h1>Add Artwork</h1>

    <form action="../core/services.php?action=addArtwork" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Title</label>
          <?php
            $value ="";


        if(!empty($_SESSION['errors']) && empty($_SESSION['errors'])){
            $value = $_SESSION['errors']['post']['title'];
        }
        echo '<input type="text" name="title" placeholder="Add title" class="form-control" value="'.$value.'">';
        if(!empty($_SESSION['errors']['title'])){
            echo '<div class="class">'.$_SESSION['errors']['title'].'</div>';
        }
    ?>
        
        
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="desc" placeholder="Add description" id="message" class="form-control"> </textarea>
         <p id="compteur">0 mots - 0 Caractere / 300</p>
    </div>
    <div class="form-row">
    <div class="col">
        <label>Artist Poster:</label>
        <?php
        require("../core/ContentManager.php");
        $cm = new ContentManager();
        echo $cm->getArtisteSelect();
        ?>
    </div>
    <div class="col">
        <label>Category</label>
        <?php
        echo $cm->getCategorySelect();
        ?>
    </div>
</div>
<div class="form-group pt-2">
    <div class="custom-file">
    <input type="file" class="custom-file-input" name="avatar" id="inputGroupFile01">
    <label class="custom-file-label" name="avatar" for="inputGroupFile01">Choose file</label>
  </div>
  <div class="form-group">
        <label>Statut <input type="checkbox" name="statut" checked></label>
       
    </div>
</div>
    <div class="d-flex justify-content-end pb-2 mt-2">
    <button type="submit" class="btn btn-info m">Add artwork</button>
    </form>


    <form action="menu.php" method="POST" enctype="multipart/form-data">
    
    <button type="submit" class="btn btn-danger ml-2">Back to menu</button>
</div>
</form>
</div>
</body>

</html>