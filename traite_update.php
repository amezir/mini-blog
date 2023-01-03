<?php
$requete = "UPDATE articles SET articles_titre ='" . $_POST['articles_titre'] . "' ,articles_texte ='" . $_POST['articles_texte'] . "' WHERE id_articles=" . $_GET["id_articles"];
var_dump($requete);
// $db->query($requete);
// header ('Location:admin.php');
?>