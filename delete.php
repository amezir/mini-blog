<?php
include ("connexion.php");
$requete= "DELETE FROM articles WHERE id_articles =". $_GET["id_articles"];

 $db->query($requete);
header ('Location:admin.php');
?>