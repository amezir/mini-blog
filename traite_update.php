<?php
$titre= $_POST['articles_titre'];
$text= $_POST['articles_texte'];

$requete = $db->prepare(UPDATE articles SET articles_titre = ? and articles_texte = ? WHERE id_articles= ?);
$requete = $db->execute([$titre, $text, $_GET["id_articles"]])
// $db->query($requete);
// header ('Location:admin.php');
?>