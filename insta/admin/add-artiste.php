<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Add Artist</title>
<?php
if(file_exists('./inc/head.inc.php')){
    include('./inc/head.inc.php');
}
?>
</head>
<body>
<div class="container">
    <h1>Add Artist</h1>
    <form action="../core/services.php?action=addArtist" method="POST" enctype="multipart/form-data">
         
    <div class="form-group">
        <label>Firstname</label>
        <input type="text" name="firstname" placeholder="John" class="form-control">
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Doe" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Adress</label>
        <input type="text" name="adress" placeholder="12 street of Didier" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>City</label>
        <select name="city" class="form-control">
        <option value="Paris">Paris </option>
        <option value="Lyon">Lyon </option>
        <option value="Oran">Oran </option>
        </select>
    </div>
    <div class="form-group">
        <label>Country</label>
        <select name="country" class="form-control">
        <option value="France">France </option>
        <option value="Algérie">Algérie </option>
        </select>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="contact@projet.fr" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Lat</label>
        <input type="number" name="lat" placeholder="5355.55" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Lon</label>
        <input type="number" name="lon" placeholder="89446.00" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="12 caracteres" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Repeat Password</label>
        <input type="password" name="repeatpassword" placeholder="12 caracteres" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Avatar</label>
        <input type="file" name="avatar" placeholder="Add picture" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Pseudo</label>
        <input type="text" name="pseudo" placeholder="Mokhtars" class="form-control" accept="image/jpeg, image/png, image/gif">
    </div>
    <div class="form-group">
        <label>Statut <input type="checkbox" name="statut" checked></label>
       
    </div>
    <div class="d-flex justify-content-end pb-2">
    <button type="submit" class="btn btn-primary ">Ajouter</button>
    
    </form>
    <form action="menu.php" method="POST" enctype="multipart/form-data">
    <button type="submit" class="btn btn-danger ml-2">Back to menu</button>
</form>
</div>
</div>
</body>
</html>