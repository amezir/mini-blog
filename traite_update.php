<?php
$titre=$_POST["articles_titre"];
$texte=$_POST["articles_texte"];
$requete = "UPDATE articles SET articles_titre ='$titre' ,articles_texte ='$texte' WHERE id_articles=" . $_GET["id_articles"];

$db->query($requete);
header ('Location:admin.php');
?>