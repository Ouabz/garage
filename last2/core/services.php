<?php
session_start();
require_once ('VehiculeManager.php');
$action;
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} elseif (isset($_POST["action"])) {
    $action = $_POST["action"];
} else {
    header('Location:../index.php');
}
switch ($action) {
    case 'addVehicule':
        $vh = new VehiculeManager();
        $vh->addVehicule($_POST, $_FILES);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    case 'getModeleSelect':
        $vh = new VehiculeManager();
        $vh->getModeleSelect();
        break;
    case 'getConstructSelect':
        $vh = new VehiculeManager();
        $vh->getConstructSelect();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    case 'getVehiculeList':
        $vh = new VehiculeManager();
        $vh->getVehiculeList();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    case 'CountVehicule':
        $vh = new VehiculeManager();
        $vh->CountVehicule();
        break;
    case 'CountVehiculeSell':
        $vh = new VehiculeManager();
        $vh->CountVehiculeSell();
        break;
    case 'CountAchat':
        $vh = new VehiculeManager();
        $vh->CountAchat();
        break;

    case 'CountMarque':
        $vh = new VehiculeManager();
        $vh->CountMarque();
        break;

    case 'CountVente':
        $vh = new VehiculeManager();
        $vh->CountVente();
        break;

}
?>