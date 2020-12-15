<?php 
setcookie('user' , "FABRICE" ,time()+36000);
setcookie('pass' , "kueyfZHD32@" , time()+36000);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO5</title>
</head>

<body> 
<p><?= "Salut ". $_COOKIE['user']." ton mot de passe c'est ". $_COOKIE['pass']; ?></p> 
</body>

</html>