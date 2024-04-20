<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Rechercher un compte</h1>
    <form action="affichercompte.php" method="get">
        Numero compte : <input type="number" name="numcompte"><br><br>
        <input type="submit" name="valider" value="valider">
        <input type="submit" name="vider" value="vider"><br><br><br><br>
    </form>
    <?php 
        require("connection.php");

        $num=$_GET['numcompte'];
        ?>

</body>
</html>