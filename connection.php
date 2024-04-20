<?php
    try{
        $bdd= new PDO('mysql:host=localhost;dbname=test_bd','root','');
        //echo"bonjour";
    }
    catch(Exception $e)
    {
        die('erreur : ' .$e->getMessage());
    }
?>