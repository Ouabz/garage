<?php
/**
 * Created by PhpStorm.
 * User: cisco
 * Date: 06/07/2018
 * Time: 14:11
 */

class Constructeurbuild
{
    // Propr
    private $bdd;
// Constructor
    public function __construct()
    {
        $connexion = Connexion::GetInstance();
        $this->bdd = $connexion->bdd;

    }
    // meth
    //get set
    public function CountConst() {
        $query = $this->bdd->prepare('SELECT * FROM constructeur');
        $query->execute();
       $nb = $query->rowCount();
        $nb = 15;
        return $nb;
    }

}