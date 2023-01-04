<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="icon" href="img/fav-ico.png">
</head>
<body>
<?php
session_start();
session_destroy();
echo 'Vous avez été déconnecté. Redirection automatique';
?>
<script>

setTimeout(() => {
    window.location="index.php";
},1500)

</script>
</body>
</html>

