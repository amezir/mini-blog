<?php
include ("connexion.php");

 $stmt = $db->prepare('UPDATE articles SET articles_titre = :articles_titre , articles_texte = :articles_texte WHERE id_articles= :id_articles');

$stmt->bindParam(':articles_titre',$_POST["titre"] , PDO::PARAM_STR); 
$stmt->bindParam(':articles_texte',$_POST["texte"] , PDO::PARAM_STR);
$stmt->bindParam(':id_articles',$_GET["id_articles"] , PDO::PARAM_STR);

$stmt ->execute();

header ('Location:admin.php');
?>