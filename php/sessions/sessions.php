<?php
session_start();

if( ! isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count'] += 1;
}

echo  '<h1>Nombre de vues : '.$_SESSION['count'] ."</h1>";
?>

<a href="destroy_session.php">Initialiser</a>
