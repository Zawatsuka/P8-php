<?php 
if(isset($_GET['login'],$_GET['password'])){
    setcookie('user' , $_GET['login'] , time()+36000); 
    setcookie('pass' , $_GET['password'] , time()+36000);
    $_COOKIE['user']= $_GET['login'];
    $_COOKIE['pass']=$_GET['password'];
}
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
        echo "Hey salut ". $_COOKIE['user'] . " tu as etais hacker ton mot de passe c'est :" . $_COOKIE['pass'];
    }
    ?>
</body>

</html>