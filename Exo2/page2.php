<?php session_start(); 
    $lastName = $_SESSION['lastName'];
    $firstName = $_SESSION['firstName'];
    $age = $_SESSION['age'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>
<body>
<?php  echo 'Bonjour je suis  '. $firstName.' '.$lastName.' et j\'ai '.$age .' ans'?>
        <br /><a href="page.php">page 1</a>
</body>
</html>