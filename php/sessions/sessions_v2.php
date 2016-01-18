<?php
session_start();

if ( isset( $_GET[ 'logout' ] ) && $_GET[ 'logout' ] == 1 ) {
    session_unset();
    session_destroy();
}

if ( !isset( $_SESSION[ 'compteur' ] ) )
    $_SESSION[ 'compteur' ] = 0;

if ( isset( $_POST[ 'visitor' ] ) )
    $_SESSION[ 'visitor' ] = $_POST[ 'visitor' ];

if ( isset( $_SESSION[ 'visitor' ] ) ) {
    $_SESSION[ 'compteur' ] += 1;
    echo "<h1>Hola " . $_SESSION[ 'visitor' ] . "</h1>";

} else {
    ?>
    <h1>Qui es tu ?</h1>
    <form action="<?php echo $_SERVER[ 'PHP_SELF' ]; ?>" method="post">
        <input name="visitor" placeholder="Saisissez votre nom" required>
        <button>OK</button>
    </form>
<?php } ?>

<div>Nombre de vues : <?php echo $_SESSION[ 'compteur' ]; ?></div>

<a href="<?php echo $_SERVER[ 'PHP_SELF' ]; ?>?logout=1">Initialiser</a>
