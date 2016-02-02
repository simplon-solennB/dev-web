<?php

require_once "Forme.php";

/**
 * User: RX LABZ
 * Date: 01/02/2016
 */
class Rectangle extends Forme implements Surface
{
    public $longueur;
    public $largeur;

    function __construct ( $longueur, $largeur, $couleur )
    {
        $this->couleur = $couleur;
        parent::__construct( $couleur );
    }

    public function getPerimetre ()
    {
        return ($this->longueur + $this->largeur) * 2;
    }

    public function getAire ()
    {
        return $this->longueur * $this->largeur;
    }
}