<?php 
    setcookie('user' , $_GET['login'] , time()+36000); 
    setcookie('pass' , $_GET['password'] , time()+36000);
    $_COOKIE['user']= $_GET['login'];
    $_COOKIE['pass']=$_GET['password'];

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
echo "Hey salut ". $_COOKIE['user'] . " tu as etais hacker ton mot de passe c'est : " . $_COOKIE['pass'];
?>
</body>
</html>