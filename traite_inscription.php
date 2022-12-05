<?php
session_start();
include ("connexion.php");

$requete= "INSERT INTO utilisateurs VALUES (NULL,:miniblog_nom,:miniblog_prenom,:miniblog_login,:miniblog_mot_de_passe)";

$stmt= $db->prepare($requete);
$stmt->bindParam(':miniblog_login',$_GET["login"] , PDO::PARAM_STR); 
$stmt->bindParam(':miniblog_nom',$_GET["nom"] , PDO::PARAM_STR); 
$stmt->bindParam(':miniblog_prenom',$_GET["prenom"] , PDO::PARAM_STR);

$hash= password_hash($_GET["pwd"],PASSWORD_DEFAULT);
$stmt->bindParam(':miniblog_mot_de_passe',$hash , PDO::PARAM_STR); 
$stmt->execute();
header ('Location:login.php');

?>