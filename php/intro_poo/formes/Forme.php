<?php

class Forme
{
    public $nom;
    public $couleur;

    function __construct ( $couleur )
    {
        $this->couleur = $couleur;
        error_log("nouvelle forme : ".$couleur);
    }
}