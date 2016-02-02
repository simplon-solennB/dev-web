<?php

require_once "Forme.php";

/**
 * User: RX LABZ
 * Date: 01/02/2016
 */
class Cercle extends Forme implements Surface
{

    const PI = 3.14159265359;

    public $rayon;

    function __construct ( $rayon, $couleur )
    {
        parent::__construct( $couleur );
    }



    function getAire ()
    {
        return self::PI * $this->rayon * $this->rayon;
    }

    function getPerimetre ()
    {
        return 2 * self::PI * $this->rayon;
    }
}