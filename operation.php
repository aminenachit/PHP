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
    <h1>effectuer une operation</h1>
    <form action="" method="get">
        Num du compte : <input type="number" name="numcompte"><br><br>
        Type operation : <select name="type" >
            <option value="debit">debit</option>
            <option value="credit">credit</option>
        </select>
        <br><br>
        Montant : <input type="number" name="montant"><br><br>
        <input type="submit" name="valider" value="valider">
        <input type="submit" name="vider" value="vider">
    </form>
    <?php
    require("connection.php");

    $numcp=$_GET['numcompte'];
    $typeop=$_GET['type'];
    $mont=$_GET['montant'];

    if ($typeop=='debit') {
        $query=$bdd->prepare("update compte set montant=montant-? where numc=$numcp;");
        $query->execute(array($mont));
        $query->closeCursor();
    }
    else {
        $query=$bdd->prepare("update compte set montant=montant+? where numc=$numcp;");
        $query->execute(array($mont));
        $query->closeCursor();
    }

    ?>
</body>
</html>