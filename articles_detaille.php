<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;900&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>
<header class="header">
        <h1 class="logo"><a href="miniblog.php">MyBlog</a></h1>
      <ul class="main-nav">
<?php
            include ("connexion.php");
            session_start();

            if(isset($_SESSION['login']))  { 
                // Si l'utilisateur logué
                   echo('<a href="login.php">Home</a> ');
                   echo('<a href="archives.php">Les Archives</a> ');
                   
               }else{
                // Si l'utilisateur non logué
                echo('<a href="miniblog.php">Home</a> ');
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
              echo "<p>Compte: {$_SESSION["login"]} </p><a href='logout.php'>Déconnexion</a> <BR>";
              }

?>
      </ul>
    </header>
<?php
$requete="SELECT * FROM articles WHERE id_articles={$_GET['id_articles']}";

$stmt=$db->query($requete);
$resultat=$stmt->fetchall(PDO::FETCH_ASSOC);

foreach($resultat as $articles){
    echo "<div class='container divcard'>
    <div class='row'>
    <div class='col'>
    <div class='card border-0'>
    <div class='position-relative'>
      <svg class='img-fluid card-img-top' width='100%' height='200px' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img'>
        <rect width='100%' height='100%' fill='#434e58'></rect>
        <text x='50%' y='50%' fill='#f9f9f9' dy='.3em'></text>
      </svg>
      <div class='card-img-overlay'><span class='badge badge-warning text-uppercase'>Articles</span></div>
    </div>
    <div class='card-body bg-muted'>
      <h5 class='card-title'>{$articles["articles_titre"]}</h5>
      <p class='card-text mt-4 txtfrm'>{$articles["articles_texte"]}</p>
      <h6 class='card-subtitle mb-2 text-muted'>Créateur: {$articles["articles_createur"]} {$articles["articles_heure"]}</h6>
    </div>
    </div>
    </div>
    </div> \n";
}

?>   

</body>
</html>