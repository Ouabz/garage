<?php
session_start();

require('ContentManager.php');
// Analyse de l'action reçue en GET ou POST
$action;
if(isset($_GET["action"])){
    $action = $_GET["action"];
}elseif(isset($_POST["action"])){
    $action = $_POST["action"];
}else{
    header('Location:../index.html');
}
// Switch case sur l'action reçue

switch($action){

    case 'addCat':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->addCat($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    // $_SESSION['message'] = "Catégorie correctement ajoutée";
    break;

    case 'addArtist':
    console.log('Tu passe nigga');
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->addArtist($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;

    case 'registerArtist':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->registerArtist($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;

    case 'getCitySelect':
        // Instanciation d'un objet de type ContentManager
        $cm = new ContentManager();
        // On déclenche la méthode
        $cm->getCitySelect($_POST, $_FILES);
        // ContentManager::addCar($_POST) est un appel statique a la methode addCat
        header('Location:'.$_SERVER['HTTP_REFERER']);
        break;

    case 'getArtworklist':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->getArtworklist($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;

    case 'addArtwork':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->addArtwork($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;

    case 'getArtworkGeek':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->getArtworkGeek($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;
        case 'getCategorySelect':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->getCategorySelect($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;
        
          case 'getConnexionList':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->getConnexionList($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;
    // Login Function addArtworkArtist
    case 'addArtworkArtist':
    // Instanciation d'un objet de type ContentManager
    $cm = new ContentManager();
    // On déclenche la méthode
    $cm->addArtworkArtist($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;
    case 'loginArtist':
    // Instanciation d'un objet de type ContentManager
    $um = new ContentManager();
    // On déclenche la méthode
    $um->loginArtist($_POST, $_FILES);
    // ContentManager::addCar($_POST) est un appel statique a la methode addCat
    header('Location:'.$_SERVER['HTTP_REFERER']);
    break;
        
    default:
    header('Location:../index.php');
}
