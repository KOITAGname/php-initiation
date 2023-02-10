<?php

// essayer de se connecter à la base de données 
// et la variable $connexion va être partagée entre plusieurs fichiers 
try{
    $connexion = new PDO("mysql:host=localhost;dnname=projet" , "root" ,"");
    //nous permet d'affiche le tableau depuis MySQL (la base de donne)
    $connexion = new PDO("mysql:host=localhost;dbname=projet;charset=utf8mb4" , "root", "");
}
catch(Exception $e){
    echo "impossible de se connecter a la base de donnees";
    var_dump($e);
    exit;
}