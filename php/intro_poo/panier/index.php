<?php

require_once "Panier.php";
require_once "Client.php";
require_once "Product.php";
require_once "Pull.php";

$client = new Client("toto@gmail.com");
$pull1 = new Pull(29);
$pull2 = new Pull(39);
$panier = new Panier( $client );

$panier->ajouteProduit($pull1);
$panier->ajouteProduit($pull2);

echo $panier->calculTotal();

?>