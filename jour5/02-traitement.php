<?php 
session_start();
var_dump($_POST) ; 

// récupérer l'email         $_POST["email"]
// récupérer le commentaire  $_POST["commentaire"]

// vérifier que les champs sont bien remplis
$erreurs = [];

if(empty($_POST["email"]) || empty($_POST["menu"])){
    array_push($erreurs, "les champs emails et menu ne peuvent être vide");
}

// vérifier si l'email n'est pas email conforme
if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "l'email saisi n'est pas valide");
}
//$liste_des_langues= ["francais","anglais","arabe"];
// vérifier que le menu contient francais / anglais / arabe
if(!($_POST["menu"] == "francais" || $_POST["menu"] == "anglais" || $_POST["menu"] == "arabe")){
    array_push($erreurs, "la langue ne fait pas partir de celles du tableau");
}

$_SESSION["form"] = $_POST ; 
// stocker les valeurs saisies dans le formlaire pour les stocker dans la session
// toutes les vérifications sont conformes 
if(count($erreurs) === 0){

// {$_SESSION["message"]} est un tableau associative qui contient un cle qui s'appelle message qui est lui meme un tableau

    $_SESSION["message"] = [ 
        "alert" => "success",
        "info"  => "merci !!!"
    ];
    header("Location: 02-exo.php"); // redirection vers la page de formulaire
    exit ;  // stopper exécution du script 
    // .... 
}else {
    $_SESSION["message"] = [ 
        "alert" => "danger",
        "info"  => $erreurs
    ];
    header("Location: 02-exo.php");
    exit ;
}