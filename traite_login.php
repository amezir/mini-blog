<?php
session_start();

include ("connexion.php");

$db->query('SET NAMES utf8');

$requete="SELECT * FROM utilisateurs WHERE miniblog_login=:miniblog_login";
$stmt=$db->prepare($requete);
$stmt->bindParam(':miniblog_login',$_GET["login"], PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowcount()==1){
	$result=$stmt->fetch(PDO::FETCH_ASSOC);
	if (password_verify($_GET["pwd"],$result["miniblog_mot_de_passe"])){
		$_SESSION["login"]=$_GET["login"];
		$_SESSION["id"]=$result["id_miniblog"];
        header ('Location:index.php');
	} else {header ('Location:login.php?err=mdp');}

} else {header ('Location:login.php?err=login');}

?>