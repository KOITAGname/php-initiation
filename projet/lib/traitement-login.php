<?php 
session_start();
$erreurs = [] ;


if(empty($_POST["login"]) || empty($_POST["password"])){
    array_push($erreurs, "veuillez remplir les deux champs");
}

$_SESSION["form"] = $_POST ;


if(count($erreurs) === 0){
    $_SESSION["form"] = [];
    //la ligne est deplacer dans message-flash.php
   // unset($_SESSION["message"]); // supprimer une variable 
    header("Location: http://localhost/php-initiation/projet/index.php?page=accueil&partie=privee");
}else{
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: http://localhost/php-initiation/projet/index.php?page=login");
}
exit ;

echo "je suis le traitement pour le formulaire de connexion" ; 
// vérifiez que les champs login et password sont bien remplis => redirection vers la page tableau de bord 
// vérifiez que les champs login et password sont bien remplis => sinon afficher un message d'erreur sous le formulaire 