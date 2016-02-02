<?php

/**
 * User: RX LABZ
 * Date: 01/02/2016
 */



class Product implements Totalisable
{
    public $nom;
    public $prix_unitaire;
    public $quantite = 1;

    public $tva;

    function __toString ()
    {
        return "Produit : ". $this->prix_unitaire;
    }

    function getTotal(){
        return $this->prix_unitaire * $this->quantite * (1 + $this->tva);
    }

}