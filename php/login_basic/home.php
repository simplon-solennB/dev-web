<?php

define( "LOGIN", "toto" );
define( "PASS", "toto" );

if ( isset( $_POST[ 'identifiant' ] ) && isset( $_POST[ 'mot_passe' ] ) ) {
    $identifiant = $_POST[ 'identifiant' ];
    $pass = $_POST[ 'mot_passe' ];
    if ( $identifiant == LOGIN && $pass == PASS ) {
        ?>
        <!doctype html>
        <html lang="en-US">
        <head>
            <meta charset="UTF-8">
            <title>Identification</title>
            <link rel="stylesheet" href="../base.css"/>
        </head>
        <body>

        <?php echo "<h1>Bienvenue " . $identifiant . "</h1>"; ?>

        </body>
        </html>
        <?php
    } else
        header( 'Location:index.php?login_error=1' );

} else {
    error_log( 'WARNING ! Paramètres manquants > ip : ' . $_SERVER[ "REMOTE_ADDR" ] );
    header( 'Location:index.php?login_error=1' );
}

?>