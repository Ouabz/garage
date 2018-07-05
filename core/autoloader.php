<?php


// Ou, en utilisant une fonction anonyme à partir de PHP 5.3.0
spl_autoload_register(function ($class) {
    include 'class/' . $class . '.class.php';
});

?>