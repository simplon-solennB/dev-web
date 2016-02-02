<?php

define( "LOGIN", "toto" );
define( "PASS", "toto" );

if ( isset( $_POST[ 'identifiant' ] ) && isset( $_POST[ 'mot_passe' ] ) ) {
    $identifiant = $_POST[ 'identifiant' ];
    $pass = $_POST[ 'mot_passe' ];
    if ( $identifiant == LOGIN && $pass == PASS ) {
        $result = array(
            "status" => 1,
            "username" => "Bobby",
            "numNewMessage" => 5
        );
        echo json_encode( $result );
    } else
        echo '{"status":0}';

} else {
    error_log( 'WARNING ! Paramètres manquants > ip : ' . $_SERVER[ "REMOTE_ADDR" ] );
    echo '{"status":0}';
}


?>
