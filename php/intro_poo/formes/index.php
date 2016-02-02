<?php

require_once "Cercle.php";
require_once "Rectangle.php";

define('B', '<br/>');



$cercle = new Cercle( 12, "rouge" );
$cercle->rayon = 12;
echo "Couleur : " . $cercle->couleur.B;
echo "Périmètre : " . $cercle->getPerimetre().B;
echo "Aire : " . $cercle->getAire().B;

$rect = new Rectangle( 20, 24,"bleu");
$rect->largeur = 24;
$rect->longueur = 10;
echo "Couleur : " . $rect->couleur.B;
echo "Périmètre : " . $rect->getPerimetre().B;
echo "Aire : " . $rect->getAire().B;

function ajouteForme( Surface $surface){
    echo $surface->getAire();
    echo $surface->getPerimetre();
}

ajouteForme( $cercle );
ajouteForme( $rect );
ajouteForme( "toto" );

