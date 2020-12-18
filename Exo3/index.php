<?php 
if(isset($_GET['login'],$_GET['password'])){
    $login =$_GET['login'];
    $pass = $_GET['password'];
    setcookie('user' , $login , time()+36000 ); 
    setcookie('pass' , $pass , time()+36000 );
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
<?php if(empty($login) && empty($pass)){ ?>
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
        echo "Hey salut ". $login . " tu as etais hacker ton mot de passe c'est :" . $pass;
    }
    ?>
</body>

</html>