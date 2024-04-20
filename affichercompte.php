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
        require("rechercher.php");
        $query= $bdd->query("select * from compte where numc=$num;");
        while($data=$query->fetch()){
           echo"
           <p>-------------------------------------------------------------------</p>
           <h1>informations du compte</h1> 
           <table border=1>
           <tr>
           <td width='170px'>numero du compte</td> <td width='170px'>".$data['numc']."</td>
           </tr>
           <tr>
           <td width='170px'>cin</td> <td width='170px'>".$data['cin']."</td>
           </tr>
           <tr>
           <td width='170px'>montant</td> <td width='170px'>".$data['montant']."</td>
            </tr>
            </table>
            ";
        }
        $query->closeCursor();
    ?>
</body>
</html>
