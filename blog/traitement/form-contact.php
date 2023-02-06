<?php
//http://localhost/php-initiation/blog/traitement/form-contact.php
session_start();
$erreurs = [];


//si un des deux champs est vide => ajouter une erreurs
if(empty($_POST["email"]) || empty($_POST["commentaire"])){
    array_push($erreurs , "veuillez completer les deux champs");
}

//est ce que l'email est un email avec une forme valide
if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    array_push($erreurs , "l'email transmis n'est pas valide");
}

//le champ commentaire doit contenir au minimum 4 lettres  et maximum 1000 lettres
if(strlen($_POST["commentaire"]) <= 4 || strlen($_POST["commentaire"]) >1000){
    array_push($erreurs , "le champ commentaire doit contenir entre 4 et 1000 lettres");
}
// recuperer toutes le texte qui est dans les formulaire
$_SESSION["form"] = $_POST ; 
// stocker les valeurs saisies dans le formulaire pour les stocker dans la session
// toutes les vérifications sont conformes 
if(count($erreurs) === 0){

// {$_SESSION["message"]} est un tableau associative qui contient un cle qui s'appelle message qui est lui meme un tableau

    $_SESSION["message"] = [ 
        "alert" => "success",
        "info"  => "merci !!!"
    ];
    // .... 
}else {
    $_SESSION["message"] = [ 
        "alert" => "danger",
        "info"  => $erreurs
    ];
}
    header("Location: http://localhost/php-initiation/blog/index.php?page=contact");
// redirection vers la page de formulaire
    exit ;  // stopper l'exécution du script 