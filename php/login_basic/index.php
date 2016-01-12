<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Identification</title>
	<link rel="stylesheet" href="../base.css"/>
    <style>
        #login-box{
            position: relative;
            top:40px;
            width: 300px;
            margin:0 auto;
            text-align: right;
        }
    </style>
</head>
<body>


<div id="login-box">
<?php
    if( isset($_GET['login_error'])){
        error_log('login_error');
        echo "<div class='error'>Erreur d'identification</div>";
    }
?>
	<form action="home.php" method="post">
		<div>
			<label for="chpIdentifiant">Identifiant</label>
			<input id="chpIdentifiant" type="text" name="identifiant"/>
		</div>
		<div>
			<label for="chpPass">Mot de passe</label>
			<input id="chpPass" type="text" name="mot_passe"/>
		</div>
		<button>Entrer</button>
	</form>
</div>

</body>
</html>