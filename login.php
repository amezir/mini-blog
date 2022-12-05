<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
<?php
include ("connexion.php");
session_start();
if (isset($_SESSION["login"]))
{ 
echo "Vout êtes déja connectée avec le compte : {$_SESSION["login"]} <a href='logout.php' class='txtfrm'>Déconnexion</a> <BR>";
}
?>


<!--Formulaire -->
<h1 class="title-contact">Login</h1>
    <section class="formu" id="Formulaire">
        <main class="styleform">
            <form action="traite_login.php">
                <div>
                <h3 class="txtfrm">Login</h3>
                <input type="text" name="login" required>
                <?php 
if (isset($_GET["err"]) && $_GET["err"]=="login") {;echo "ATTENTION MAUVAIS LOGIN";}
?>
                <h3 class="txtfrm">Password</h3>
                <input type="password" name="pwd" required>   
                <?php 
if (isset($_GET["err"]) && $_GET["err"]=="mdp") { echo "ATTENTION MAUVAIS MOT DE PASSE";}
?>
                <p class="formbtn">
                    <input type="submit" name="submit" value="Se connecter">
                </p>
               <div class="formtextg">
                  <p class="txtfrm">Vous n'êtes pas membre ? <a href="inscription.php" class="txtfrm">Inscrivez-vous maintenant</a></p>

<p class="txtfrm" >Voir <a href="miniblog.php" class="txtfrm"> Continuer en tant que visiteur</a></p>
               </div> 

                <div>
                </form>
</main>
</section>


<script src="./js/bootstrap.js"></script>
</body>
</html>