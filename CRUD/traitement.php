<?php
session_start();
?>
<?php
$erreurs = [];
// est ce que tous les champs sont bien remplis ??
if(
    empty($_POST["titre"])||
    empty($_POST["contenu"])||
    empty($_POST["auteur"])||
    empty($_POST["dt_creation"])
    ){
array_push($erreurs , "tous les champ doivent etre remplis");
    }
//tester le nombre de caracteres du champ titre
if(strlen($_POST["titre"]) <= 4 || strlen($_POST["titre"]) >= 255){
    array_push ($erreurs , "le champ titre doit contenir entre 4 et 255 caracteres");
}

// tester le nombre de caractères du champ contenu 
if(strlen($_POST["contenu"]) <= 4 || strlen($_POST["contenu"]) >= 1000){
    array_push($erreurs , "le champ contenu doit contenir entre 4 et 1000 caractères");
}

//tester le nombre de caracteres du champ auteur
if(strlen($_POST["auteur"]) <= 4 || strlen($_POST["auteur"]) >= 255){
    array_push ($erreurs , "le champ auteur doit contenir entre 4 et 255 caracteres");
}

/// tester que le champ date a bien transmis une date au format AAAA-MM-JJ  
if(!strtotime($_POST["dt_creation"])){ 
    array_push($erreurs , "le champ date de création n'est pas conforme");
}

// stocker les valeurs saisies dans le formulaire pour les réafficher en cas d'erreur 

$_SESSION["form"] = $_POST ;

// si tout est bon => pas d'erreur 
//on verifier si le tablaeu $erreurs est vide
if(count($erreurs) === 0){
    // dire merci 
    $_SESSION["message"] = [
        "alert" => "success",
        "info"  => "merci l'article est bien enregistré"
    ];
    // INSERER les informations en base de données
    $connexion = new PDO('sqlite:./base.db');
    //creation du tableau 
    $connexion->query("
        CREATE TABLE IF NOT EXISTS articles (
            id INTEGER PRIMARY KEY AUTOINCREMENT ,
            titre VARCHAR(255) ,
            contenu TEXT , 
            auteur VARCHAR(255) ,
            dt_creation DATE
        )
    ");
    $sth = $connexion->prepare("
        INSERT INTO articles
            (titre , contenu , auteur, dt_creation)
        VALUES
            (:titre , :contenu , :auteur , :dt_creation)
    "); 
    // requête préparée => requete dans laquelle on prévient PHP que il y a des champs sous la forme :col
    $sth->execute($_POST);
    // vider la $_SESSION["form"]
    $_SESSION["form"] = [];
    
}else {
    // dire les erreurs 
    $_SESSION["message"] = [
        "alert" => "danger",
        "info"  => $erreurs
    ];
}
// redirection le formulaire 
header("Location: http://localhost/php-initiation/CRUD/form.php");
// stop 
exit ; 