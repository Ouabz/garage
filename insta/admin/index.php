<?php
session_start();
if(file_exists('./inc/head.inc.php')){
    include('./inc/head.inc.php');
}
?>
<!-- BANNER -->
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        InstaPop
      </h1>
      <h2 class="subtitle ">
        Administration Panel
      </h2>
    </div>
  </div>
</section>
<!-- Login Form -->
<html>

<body>
<!-- LOGIN FUNCTION -->
<?php
if(!empty($_SESSION['email']))
{
 header("location:menu.php");
}
try{
$con = new PDO('mysql:host=localhost;dbname=mokdevst_', 'mokdev','Pokemon91170@', array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
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
     $MachineName = $_ENV["HOSTNAME"]; 
    echo $machine;
// echo $ip_saved;
 // echo $passMd5;
 $successfalse = "Bad combine";
  $successtrue = "Login Success";
 $select = $con->prepare("SELECT * FROM artiste WHERE email='$email' and password='$passMd5' and statut=2");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 if($data['email']!=$email and $data['password']!=$passMd5)
 {
  // $update = $con->prepare("UPDATE artiste SET last_tentative_login_ip = '$ip_saved' WHERE email='$email'");
  $update = $con->prepare('INSERT INTO history_connexion (email_artist,ip_login,date_login,passwordentry,success_statut) VALUES ("'.$email.'", "'.$ip_saved.'", "'.$date.'", "'.$password.'", "'.$successfalse.'")');
  $update->execute();
  echo "Mot de passe ou email invalide";
 }elseif($data['statut']== 2){
     echo "Error"; }
 elseif($data['email']==$email and $data['password']==$passMd5)
 {
    $update = $con->prepare('INSERT INTO history_connexion (email_artist,ip_login,date_login,passwordentry,success_statut) VALUES ("'.$email.'", "'.$ip_saved.'", "'.$date.'", "'.$password.'", "'.$successtrue.'")');
  $update->execute();
  header('Location: menu.php');
 $_SESSION['email']=$data['email'];
  $_SESSION['pseudo']=$data['pseudo'];
    $_SESSION['statut']=$data['statut'];
 }
 }
}
catch(PDOException $e)
{
echo "error".$e->getMessage();
}
?>
    <form method="post">
            <div class="container mt-5 col-centered row">
<div class="field col-md-4 col-centered">
  <p class="control has-icons-left has-icons-right">
    <input class="input" type="email" name="email" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </p>
</div>
<div class="field col-md-4 col-centered">
  <p class="control has-icons-left">
    <input class="input" name="password" type="password" placeholder="Password">
    <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
  </p>
</div>
<div class="field col-md-4 col-centered">
  <p class="control">
    <button type="submit" name="signin" class="button is-success btnlogin">
      Login
    </button>
      </form>
  </p>
</div>
</div>


</body>
</html>