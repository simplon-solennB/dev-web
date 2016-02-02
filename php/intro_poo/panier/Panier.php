<?php

require_once "Produit.php";
require_once "Client.php";

class Panier
{
    const TVA = 0.2;

    public $produits;

    private $client;

    function __construct ( Client $client )
    {
        $this->client = $client;
    }

    public function ajouteProduit ( Totalisable $produit )
    {
        error_log( 'ajoute produit ' . $produit );
        $this->produits[] = $produit;
        error_log('total'. $this->calculTotal() );
    }

    public function calculTotal(){
        $total = 0;
        error_log("num produits : ".count($this->produits));
        foreach ( $this->produits as $produit ) {
            $total += $produit->getTotal();
        }
        return $total;
    }

    public function envoiFacture(){
        $this->client->envoiFacture( $this->calculTotal() );
    }

}