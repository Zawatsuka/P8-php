<?php 
if(isset($_GET['login'],$_GET['password'])){
    $login = $_GET['login'];
    $password = $_GET['password'];
}
   setcookie('user' , $login , time()+36000); 
   setcookie('pass' , $password , time()+36000);
   $_COOKIE['user']= $login;
   $_COOKIE['pass']=$password;
   $cookieUser = $_COOKIE['user'];
   $cookiePass =$_COOKIE['pass'];
   
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO3</title>
</head>

<body>
<?php if(empty($_COOKIE['user']) && empty($_COOKIE['pass'])){ ?>
    <form action="index.php" method="get">
        <label> Pseudo
            <input type="text" name='login'>
        </label>
        <label> Mot de passe
            <input type="password" name='password'>
        </label>
        <input type="submit" value ='Connexion'>
    </form>
    <?php 
    }else{
        echo "Hey salut ". $cookieUser . " tu as etais hacker ton mot de passe c'est :" . $cookiePass;
    }
    ?>
</body>

</html>