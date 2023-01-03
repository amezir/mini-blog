<?php
include ("connexion.php");
$requete= "DELETE FROM commentaire WHERE id_commentaire =". $_GET["id_commentaire"];

 $db->query($requete);
header ('Location:admin.php');
?>