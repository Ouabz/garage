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
<body>
<div class="container">
    <h1>Add category</h1>
    <form action="../core/services.php?action=addCat" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" placeholder="Add title" class="form-control">
    </div>
    <div class="form-group">
        <label>Picture</label>
        <input type="file" name="picture" placeholder="Add picture" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="d-flex justify-content-end pb-2">
    <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    <form action="menu.php" method="POST" enctype="multipart/form-data">
    <button type="submit" class="btn btn-danger ml-2">Back to menu</button>
</div>
</form>
</div>
</body>
</html>