<?php
session_start();
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
header('Location: index.php');
}elseif(isset($_POST['signin'])){
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $select = $con->prepare("SELECT * FROM artiste WHERE email='$email' and password='$password'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 if($data['email']!=$email and $data['password']!=$password)
 {
 	header('Location: /login')
  echo "invalid email or pass";
 }
 elseif($data['email']==$email and $data['password']==$password)
 {
 $_SESSION['email']=$data['email'];
    $_SESSION['name']=$data['name'];
header("location:profile.php"); 
 }
 }
}
catch(PDOException $e)
{
echo "error".$e->getMessage();
}
?>