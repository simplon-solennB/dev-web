<?php
session_start();

if( ! isset($_SESSION['compteur'])){
    $_SESSION['compteur'] = 0;
} else {
    $_SESSION['compteur'] += 1;
}

echo  '<h1>Nombre de vues : '.$_SESSION['compteur'] ."</h1>";
?>

<a href="destroy_session.php">Initialiser</a>
