<?php
include ("connexion.php");
session_start();
$requete= "INSERT INTO commentaire VALUES (NULL,:texte_commentaire,NOW(),:ext_articles_commentaire,:ext_utilisateurs_commentaire)";
$id_articles= $_GET["id_articles"];
$stmt= $db->prepare($requete);
$stmt->bindParam(':texte_commentaire',$_POST["texte"] , PDO::PARAM_STR); 
$stmt->bindParam(':ext_articles_commentaire',$_GET["id_articles"] , PDO::PARAM_STR); 
$stmt->bindParam(':ext_utilisateurs_commentaire',$_SESSION["id"] , PDO::PARAM_STR);

$stmt->execute();
header("Location:articles_detaille.php?id_articles=$id_articles");
?>