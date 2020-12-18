<?php 
    $login = $_GET['login'];
    $pass = $_GET['password'];
    setcookie('user' , $login , time()+36000); 
    setcookie('pass' , $pass , time()+36000);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
</head>
<body>
<?php
echo "Hey salut ". $login . " tu as etais hacker ton mot de passe c'est : " . $pass;
?>
</body>
</html>