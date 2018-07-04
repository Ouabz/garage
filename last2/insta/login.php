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
    <title>Login | Instagram</title>
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
    
    
    
</head>
<body>
    <div class="container">
        <!-- NAV BAR -->
        <?php
if (file_exists('inc/navbar.inc.php')) {
    include('./inc/navbar.inc.php');
}
?>
<!-- LOGIN FUNCTION -->
<?php
session_start();
if(!empty($_SESSION['email']))
{
 header("location:article.php");
}
try{
$con = new PDO('mysql:host=localhost;dbname=bdd-insta', 'root','', array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
if(isset($_POST['signup'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $date = $_POST['date'];
 $month = $_POST['month'];
 $year = $_POST['year'];
 
 $insert = $con->prepare("INSERT INTO users (name,email,pass,date,month,year)
values(:name,:email,:pass,:date,:month,:year) ");
$insert->bindParam(':name',$name);
$insert->bindParam(':email',$email);
$insert->bindParam(':pass',$pass);
$insert->bindParam(':date',$date);
$insert->bindParam(':month',$month);
$insert->bindParam(':year',$year); 
$insert->execute();
}elseif(isset($_POST['signin'])){
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passMd5 = md5($password);
 $date = date("Y-m-d H:i:s");
$ip_saved = $_SERVER['REMOTE_ADDR'];
/** echo $ip_saved;
 echo $passMd5;
 **/
 $successfalse = "Bad combine";
  $successtrue = "Login Success";
 $select = $con->prepare("SELECT * FROM artiste WHERE email='$email' and password='$passMd5'");
     $_SESSION['id']=$data['id'];
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 if($data['email']!=$email and $data['password']!=$passMd5)
 {
  // $update = $con->prepare("UPDATE artiste SET last_tentative_login_ip = '$ip_saved' WHERE email='$email'");
  $update = $con->prepare('INSERT INTO history_connexion (email_artist,ip_login,date_login,passwordentry,success_statut) VALUES ("'.$email.'", "'.$ip_saved.'", "'.$date.'", "'.$password.'", "'.$successfalse.'")');
  $update->execute();
  echo "<div class='alert alert-danger' style='margin: 20px;' role='alert'>
  Email ou mot de passe invalide.
</div>";
 }
 elseif($data['email']==$email and $data['password']==$passMd5)
 {
    $update = $con->prepare('INSERT INTO history_connexion (email_artist,ip_login,date_login,passwordentry,success_statut) VALUES ("'.$email.'", "'.$ip_saved.'", "'.$date.'", "'.$password.'", "'.$successtrue.'")');
  $update->execute();
  header('Location: article.php');
     $_SESSION['firstname']=$data['firstname'];
$_SESSION['email']=$data['email'];
$_SESSION['pseudo']=$data['pseudo'];
$_SESSION['id']=$data['id'];
     $_SESSION['statut']=$data['statut'];

 }
 }
}
catch(PDOException $e)
{
echo "error".$e->getMessage();
}
?>
<!-- FIN -->
       <!-- CARROUSEL -->
        <body>
    <form method="POST" action="login.php" enctype="multipart/form-data">
      
        <h1 style='text-align: center;'>Login</h1>
  <div class="form-group">
   
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-primary" name="signin">Login</button>
</form>

<!-- REGISTER -->
</div>
</div>
</body>
    
    <!-- JS -->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/custom.js"></script>
</body>

</html>