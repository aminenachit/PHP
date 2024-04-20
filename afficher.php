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
    <?php
    require("connection.php");

    $query= $bdd->query("select * from client;");
    echo"<h1>liste des clients</h1>";
    echo "<table border=1 >
    <th>cin</th>
    <th>nom</th>
    <th>prenom</th>
    <th>dnaiss</th>
    <th>adresse</th>
    <th>email</th>
    <th>tel</th> ";
 
    while($data=$query->fetch())
    {
        echo"    
        
        <tr>
        <td width='170px'>".$data['cin']."</td>
        <td width='170px'>".$data['nom']."</td>
        <td width='170px'>".$data['prenom']."</td>
        <td width='170px'>".$data['dnaiss']."</td>
        <td width='170px'>".$data['adresse']."</td>
        <td width='170px'>".$data['email']."</td>
        <td width='170px'>".$data['tel']."</td>
        </tr>
         
        ";
    }
    echo"</table>";
    $query->closeCursor();
?>
</body>
</html>
