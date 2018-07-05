<?php
/**
 * CONSTRUCTEUR SERVICES
 * @CountMarque
 * @getConstructSelect
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
     *  CountMarque permet de comtpé le nombre de
     */
    case 'CountConst':
        $co = new Constructeurbuild();
        $co->CountConst();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
}
?>