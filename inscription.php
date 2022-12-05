<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<?php
include ("connexion.php");
session_start();
if (isset($_SESSION["login"]))
{ 
echo "Vout êtes déja connectée avec le compte : {$_SESSION["login"]} <a href='logout.php'>Déconnexion</a> <BR>";
}
?>

    <div>

        <form action="traite_inscription.php">

            <div>
                <label><span>Login</span></label>
                <input autocomplete="username" id="login__username" type=text name="login" placeholder="Login" required>
            </div>

			<div>
                <label><span>Nom</span></label>
                <input autocomplete="username" id="login__username" type=text name="nom" placeholder="Nom" required>
            </div>

			<div>
                <label><span >Prénom</span></label>
                <input autocomplete="username" id="login__username" type=text name="prenom" placeholder="Prénom" required>
            </div>

            <div>
                <label><span>Password</span></label>
                <input id="login__password" type="password" name="pwd" placeholder="Password" required>
            </div>

            <div>
                <input type="submit" value="Inscrivez-vous">
            </div>

        </form>

        <p class="text--center">Vous êtes déjà membre ? <a href="login.php">Se connecter maintenant! </a></p>

    </div>

    <script src="./js/bootstrap.js"></script>

</body>
</html>