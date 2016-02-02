<?php

require_once "Produit.php";

/**
 * Class Pull : permet de définir caractéristiques d'un produit Pull
 */
class Pull extends Product
{
    /**
     * couleur
     * @var string
     */
    public $couleur;

    /**
     * taille pull cf. Taille
     * @var int
     * @see Taille
     */
    public $taille;

    /**
     * Pull constructor.
     * @param $prix prix du pull
     * @param string $couleur
     * @param int $taille
     * @param float $tva
     */
    function __construct ( $prix, $couleur = "bleu", $taille=5 , $tva = 0.2 )
    {
        $this->couleur = $couleur;
        $this->tva = $tva;
        $this->taille = $taille;
        $this->prix_unitaire = $prix;
    }
}