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
<header class="header">
        <h1 class="logo"><a href="miniblog.php">MyBlog</a></h1>
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
                  echo "<a href='admin.php' class='text-decoration-line-through'>Gérer le miniblog</a>";
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

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item txtfrm"><a href="miniblog.php">Home</a></li>
    <li class="breadcrumb-item txtfrm"><a href="admin.php">Admin</a></li>
  </ol>
</nav> 
<?php     
   
   if (isset($_SESSION["login"])){

    // Si l'utilisateur logué est l'admin
    if ($_SESSION["id"] == 1){
    echo("        <form action='traitre_admin.php'>

    <div>
        <label><span>Titre</span></label>
        <br>
        <input type=text name='titre' placeholder='Titre' required>
    </div>

    <div>
        <label><span>Texte</span></label>
        <br>
        <textarea class='arg' type='text' name='texte' cols='40'
                    rows='5' maxlength='500' spellcheck='true'></textarea>
    </div>

    <div>
        <label><span>Créateur</span></label>
        <br>
        <input type=text name='createur' placeholder='{$_SESSION["login"]}' readonly required>
    </div>

    <div>
        <input type='submit' value='Crée l article'>
    </div>

</form>
</div> ");
      echo('<br>');
    }else {}

  }else {}
?>

<script src="./js/bootstrap.js"></script>

</body>
</html>