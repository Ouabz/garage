<?php  session_start();
if(empty($_SESSION['email']))
{
 header("location:login.php");
}

?>

WELCOME :<?php echo $_SESSION['pseudo']; ?>
WELCOME : <?php echo $_SESSION['email']; ?>
WELCOME : <?php echo $_SESSION['firstname']; ?>
WELCOME : <?php echo $_SESSION['id']; ?>


<a href="logout.php">Logout</a>