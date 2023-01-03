<?php
include ("connexion.php");
$requete= "INSERT INTO articles VALUES (NULL,:articles_titre,:articles_texte,NOW())";

$stmt= $db->prepare($requete);
$stmt->bindParam(':articles_titre',$_GET["titre"] , PDO::PARAM_STR); 
$stmt->bindParam(':articles_texte',$_GET["texte"] , PDO::PARAM_STR); 

$stmt->execute();
header ('Location:admin.php');


?>