<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ajouter</title>
</head>
<?php
    require("connection.php");
    function creer_formulaire(){
    echo"
    <body>
    <h1>ajouter un nouveau client</h1>
    <form action=\"\" method=\"get\">
    cin :<input size=\"56%\" type=\"text\" name=\"cin\" > <br> <br>
    Nom :<input size=\"55%\"type=\"text\" name=\"nom\" > <br> <br>
    Prenom :<input size=\"53%\"type=\"text\" name=\"prenom\" > <br> <br>
    date de naissance :<input type=\"date\" name=\"date\" > <br> <br>
    adresse :<input size=\"54%\"type=\"text\" name=\"adresse\" > <br> <br>
    email :<input size=\"56%\"type=\"text\" name=\"email\" > <br> <br>
    Tel :<input size=\"57%\"type=\"text\" name=\"tel\" > <br> <br>
    <input size=\"56%\"type=\"submit\" name=\"valider\" value=\"valider\">
    <input size=\"56%\"type=\"submit\" name=\"vider\" value=\"vider\">
    
    </form>
    </body>
    ";
    }
    creer_formulaire(); // appeller la fonction 
    $cin=$_GET['cin'];
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $date=$_GET['date'];
    $adresse=$_GET['adresse'];
    $email=$_GET['email'];
    $tel=$_GET['tel'];

    $query=$bdd->prepare("insert into client(cin,nom,prenom,dnaiss,adresse,email,tel) values(?,?,?,?,?,?,?);");
    $query->execute(array($cin,$nom,$prenom,$date,$adresse,$email,$tel));
    $query->closeCursor();
    ?>

</html>