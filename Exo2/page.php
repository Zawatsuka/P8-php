<?php session_start();
        $_SESSION['lastName']= 'THOMAS';
        $_SESSION['firstName']= 'Lucas';
        $_SESSION['age']= 21 ;
        ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>

<body>
    <h1>La Premiere Page</h1>

    <a href="page2.php">page 2</a>
</body>

</html>