<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="icon" href="img/fav-ico.png">
</head>
<body>
<header class="header">
        <h1 class="logo"><a href="index.php">MyBlog</a></h1>
      <ul class="main-nav">

<?php

            include ("connexion.php");
            session_start();
            if(isset($_SESSION['login']))  { 
                // Si l'utilisateur logué
                   echo('<a href="archives.php">Les Archives</a> ');
                   
               }else{
                // Si l'utilisateur non logué
                   echo('<a href="archives.php">Les Archives</a> ');
                   echo('<a href="login.php">Connexion</a> ');
                   echo('<a href="inscription.php">Inscription</a>');
                   echo('<br>');
               }
               
               if (isset($_SESSION["login"])){
          
                // Si l'utilisateur logué est l'admin
                if ($_SESSION["id"] == 1){
                  echo "<a href='admin.php'>Gérer le miniblog</a>";
                  echo('<br>');
                }else {}


              }else {}

              if (isset($_SESSION["login"]))
              { 
              echo "<a href='profil_detaille.php?id_miniblog={$_SESSION["id"]}'>Compte: {$_SESSION["login"]} </a><a href='logout.php'>Déconnexion</a> <BR>";
              }

?>
      </ul>
    </header>

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item txtfrm"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="profil_detaille.php">Profil</a></li>
  </ol>
</nav>  

<?php

echo("<div class='container mt-5'>
    
<div class='row d-flex justify-content-center'>
    
    <div class='col-md-7'>
        
        <div class='card p-3 py-4'>
            
            <div class='text-center'>
                <img src='https://cdn-icons-png.flaticon.com/512/1144/1144760.png' width='100' class='rounded-circle'>
            </div>
            
            <div class='text-center mt-3'>
                <span class='bg-secondary p-1 px-4 rounded text-white'>Membre</span>
                <h5 class='mt-2 mb-0'>Login: {$_SESSION["login"]}</h5>
                <h5 class='mt-2 mb-0'>Nom: {$_SESSION["nom"]}</h5>
                <div class='buttons'>
                  <a href='logout.php'>Déconnexion</a>
                </div>
                
                
            </div>
            
           
            
            
        </div>
        
    </div>
    
</div>

</div>")

?>


<script src="./js/bootstrap.js"></script>
</body>
</html>

