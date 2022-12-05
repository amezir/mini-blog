<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
session_destroy();
echo 'Vous avez été déconnecté. Redirection automatique';
?>
<script>

setTimeout(() => {
    window.location="login.php";
},1500)

</script>
</body>
</html>

