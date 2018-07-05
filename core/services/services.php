<?php
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
    case 'addVehicule':
        $vh = new VehiculeManager();
        $vh->addVehicule($_POST, $_FILES);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    /**
     * getModeleSelect permet d'afficher la liste des modeles en forme de SELECT.
     */
    case 'getModeleSelect':
        $vh = new VehiculeManager();
        $vh->getModeleSelect();
        break;
    /**
     * getConstructSelect permet d'afficher la liste des constructeurs (marque) en forme de SELECT.
     */
    case 'getConstructSelect':
        $vh = new VehiculeManager();
        $vh->getConstructSelect();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    /**
     * La function getVehiculeList permet de récuperé la liste des véhicules vendu ou non et
     * les affiches dans un tableau
     */
    case 'getVehiculeList':
        $vh = new VehiculeManager();
        $vh->getVehiculeList();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    /**
     * CountVehicule permet de savoir le nombre de véhicule total (vendu ou non)
     */
    case 'CountVehicule':
        $vh = new VehiculeManager();
        $vh->CountVehicule();
        break;
    /**
     * CountVehiculeSell permet de savoir le nombre de véhicule vendu.
     */
    case 'CountVehiculeSell':
        $vh = new VehiculeManager();
        $vh->CountVehiculeSell();
        break;
    /**
     * CountAchat permet de savoir le nombre de véhicule vendu en récupérant l'id veh_statut.
     */
    case 'CountAchat':
        $vh = new VehiculeManager();
        $vh->CountAchat();
        break;

    /**
     * CountMarque compte le nombre de marque (constructeur) et les affiches.
     */
    case 'CountMarque':
        $vh = new VehiculeManager();
        $vh->CountMarque();
        break;

    /**
     * CountVente permet de savoir le chiffre d'affaire ( en additionnant tout les entrées veh_price_vente où l'id est vendu.
     */
    case 'CountVente':
        $vh = new VehiculeManager();
        $vh->CountVente();
        break;
    /**
     * addGarage permet d'ajouter les garages à la base de donnée (gar_name,gar_space).
     */
    case 'addGarage':
        $vh = new VehiculeManager();
        $vh->addGarage($_POST);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;

    /**
     * getGarageSelect affiche les noms des garages et leur place en select option.
     */
    case 'getGarageSelect':
        $vh = new VehiculeManager();
        $vh->getVehiculeList();
        header('Location' . $_SERVER['HTTP_REFERER']);
        break;
    case 'getGaragesList':
        $vh = new VehiculeManager();
        $vh->getGaragesList();
        break;
    case 'SetVendu':
        $vh = new VehiculeManager();
        $vh->SetVendu();
        break;
        /**
         *  FUNCTION POUR LA GESTION DES UTILISATEURS !!
         */
    case 'addUser':
        $vh = new VehiculeManager();
        $vh->addUser($_POST);
        break;
}
?>