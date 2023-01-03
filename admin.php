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
    <li class="breadcrumb-item txtfrm"><a href="admin.php">Admin</a></li>
  </ol>
</nav> 
<?php     
   
   if (isset($_SESSION["login"])){

    // Si l'utilisateur logué est l'admin
    if ($_SESSION["id"] == 1){
    echo("        <form action='traitre_admin.php'>
    <div>
        <label><span>Créateur</span></label>
        <br>
        <input type=text name='createur' placeholder='{$_SESSION["login"]}' readonly required>
    </div>
    <div>
        <label><span>Titre</span></label>
        <br>
        <input type=text name='titre' placeholder='Titre' required>
    </div>

    <div>
        <label><span>Texte</span></label>
        <br>
        <textarea class='arg' type='text' name='texte' cols='40'
                    rows='5' maxlength='2000' spellcheck='true'></textarea>
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


 <table class='table table-bordered'>
  <h1>Articles list</h1>
      <thead>
        <tr>
          <th scope='col'>id</th>
          <th scope='col'>Article Titre</th>
          <th scope='col'>Date</th>
          <th scope='col'>Edition</th>
        </tr>
      </thead>


<?php
           $requete="SELECT * FROM articles";

           $stmt=$db->query($requete);
           $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);

           foreach($resultat as $articles){
      echo("
      <tbody>
        <tr>
          <th scope='row'>{$articles["id_articles"]}</th>
          <td>{$articles["articles_titre"]}</td>
          <td>{$articles["articles_heure"]}</td>
          <td>
          <a href='update.php?id={$articles["id_articles"]}'>Update</a>
          </td>
          <td>
          <a href='delete.php?id_articles={$articles["id_articles"]}'>Delete</a>
          </td>
        </tr>       </tbody>");}
?>
    </table>


    <table class='table table-bordered'>
  <h1>Commentaires list</h1>
      <thead>
        <tr>
          <th scope='col'>id</th>
          <th scope='col'>texte</th>
          <th scope='col'>Date</th>
          <th scope='col'>Edition</th>
        </tr>
      </thead>


<?php
           $requete="SELECT * FROM commentaire";

           $stmt=$db->query($requete);
           $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);

           foreach($resultat as $commentaire){
      echo("
      <tbody>
        <tr>
          <th scope='row'>{$commentaire["id_commentaire"]}</th>
          <td>{$commentaire["texte_commentaire"]}</td>
          <td>{$commentaire["date_commentaire"]}</td>
          <td>
          <a href='delete_com.php?id_commentaire={$commentaire["id_commentaire"]}'>Delete</a>
          </td>
        </tr>       </tbody>");}
?>
    </table>    

<script src="./js/bootstrap.js"></script>
</body>
</html>