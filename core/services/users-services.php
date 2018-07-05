<?php
/**
 * USERS SERVICES
 * @addUsers
 * @EditUsers
 * @DeleteUsers
 *
 */
session_start();
require_once('../autoloader.php');
$action;
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} elseif (isset($_POST["action"])) {
    $action = $_POST["action"];
} else {
    header('Location:../index.php');
}
switch ($action) {
    /**
     *  addVehicule permet d'ajouter un véhicule à la base de donnée.
     */
    case 'addUser':
        $vh = new UserManager();
        $vh->addUser($_POST, $_FILES);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    case 'listUser';
    $vh = new UserManager();
    $vh->getUserList();
    break;
}
?>