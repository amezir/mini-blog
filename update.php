
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
        <input type='submit' value='Update'>
    </div>
    <div>
        <a href='admin.php'>Annuler</a>
    </div>
</form>
</div> ");
      echo('<br>');
    }else {}

  }else {}
?>
