<?php 
session_start();
var_dump($_POST) ; 

// récupérer l'email         $_POST["email"]
// récupérer le commentaire  $_POST["commentaire"]

// vérifier que les champs sont bien remplis
$erreurs = [];

if(empty($_POST["email"]) || empty($_POST["commentaire"])){
    array_push($erreurs, "les champs emails et commentaires ne peuvent être vide");
}

// vérifier si l'email n'est pas email conforme
if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "l'email saisi n'est pas valide");
}

// vérifier que le commmentaire contient au moins 4 lettres et un maximum de 1000 lettres
if(strlen($_POST["commentaire"]) <= 4 || strlen($_POST["commentaire"]) >= 1000){
    array_push($erreurs, "le champ commentaire doit contenir au minimum 4 lettres et au maximum 1000 lettres");
}

$_SESSION["form"] = $_POST ; 
// stocker les valeurs saisies dans le formlaire pour les stocker dans la session

// toutes les vérifications sont conformes 
if(count($erreurs) === 0){
    // traitement 
    // enregistrer en base de données
    // envoyer une email
    // créer devis 
    // créer une session 
    $_SESSION["message"] = [ 
        "alert" => "success",
        "info"  => "merci pour votre message"
    ];
    header("Location: 00-post.php"); // redirection vers la page de formulaire
    exit ;  // stopper exécution du script 
    // .... 
}else {
    $_SESSION["message"] = [ 
        "alert" => "danger",
        "info"  => $erreurs
    ];
    header("Location: 00-post.php");
    exit ;
}