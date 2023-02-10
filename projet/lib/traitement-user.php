<?php 
//on na creer ce fichier (traitement-user.php)  pour pouvoir ajouter un nouveau profil dans le formulaire
// traitement sur le ADD  (  Ajouter un nouveau profil )
session_start();
$erreurs = [];
require "base-de-donne.php";

if(
    empty($_POST["nom"]) || 
    // empty($_POST["email"]) ||
    // empty($_POST["password"]) 
    empty($_POST["email"])
){
    array_push($erreurs , "veuillez compléter les champs");
}
// traitement sur le password
if( empty($_POST["password"]) && !isset($_POST["id"]) ){
    array_push($erreurs , "veuillez compléter le mot de passe");
}

if(strlen($_POST["nom"]) <= 4 || strlen($_POST["nom"]) >= 255){
    array_push($erreurs , "le champ nom doit contenir entre 4 et 255 lettres");
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs , "l'email n'est pas conforme");
}

//if(strlen($_POST["password"]) <= 4 || strlen($_POST["password"]) >= 255){
// le champ password doit contenir entre 4 et 255 caractères uniquement dans le formulaire d'Ajout 
if((strlen($_POST["password"]) <= 4 || strlen($_POST["password"]) >= 255) && !isset($_POST["id"])){
    array_push($erreurs , "le champ password doit contenir entre 4 et 255 lettres");
}

// autre test => il ne faut pas qu'il y ait 2 utilisateurs qui disposent du même email
$sth = $connexion->prepare("SELECT * FROM users WHERE email = :email");
$sth->execute(["email" => $_POST["email"]]);
//nous permet d'affiche plusieurs profil
//$resultat = $sth->fetchAll();
//nous permet d'affiche un seul profil utilisateur 
$resultat = $sth->fetch();

// if(!empty($resultat)){   
if(!empty($resultat) && $_POST["id"] != $resultat["id"]){
    array_push($erreurs , "il existe déjà un profil avec cet email");
}


if(isset($_POST["actif"])){
    $_POST["actif"] = "1";
}else {
    $_POST["actif"] = "0";
}

// traitements 
$_SESSION["form"] = $_POST ;

if(count($erreurs) === 0){
    $_SESSION["form"] = [];

    // on inserer un profil d'utilisateur quant on na pas id dans le formulaire
    // quant-on n'a un id => update (modification)
    //quant-on n'a pas id=> insert (insertion)



    // // ------------ajouter le profil en base données ---------
    // //-------------------creation de la table //insertion --------------
    // $sth = $connexion->prepare("
    // INSERT INTO users
    // ( nom , email , password ,dt_creation , status)
    // VALUES
    // ( :nom , :email , MD5(:password) , NOW(), :actif)
    // ");
    // //MD5() fonction de hashage de MySQL => permet de hacher le mot de passe dans la base 
    // //la fonction ne dispose pas de fonction inverse
    // $sth-> execute($_POST);

//---------------le formulaire est vide--------------
//---------------------creation----------------------
      // si le formulaire ne contient pas de champ id 
      if(!isset($_POST["id"])){ 
        // ajouter le profil en base données 
        $sth = $connexion->prepare("
            INSERT INTO users 
            (nom , email , password , dt_creation , status)
            VALUES
            (:nom , :email , MD5(:password) , NOW() , :actif)
        ");
        // MD5() fonction de hashage de MySQL => permet de hasher le mot de passe dans la base 
        // ET la fonction ne dispose pas de fonction inverse 
        $sth->execute($_POST);
    }elseif(isset($_POST["id"]) && empty($_POST["password"])){

//------------ modification (update) sans mot de passe--------------
     // UPDATE de tous les champs sauf le mot de passe 
     unset($_POST["password"]);
     $sth = $connexion->prepare("
         UPDATE users SET nom = :nom , email = :email , status = :actif WHERE id = :id 
     ");
     $sth->execute($_POST);
 }else {
     // UPDATE de tous les champs AVEC le mot de passe 
     $sth = $connexion->prepare("
         UPDATE users SET nom = :nom , 
                 email = :email , status = :actif , password = MD5(:password) WHERE id = :id 
     ");
     $sth->execute($_POST);
 }





    header("Location: http://localhost/php-initiation/projet/index.php?page=user&partie=privee");
}else{
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: http://localhost/php-initiation/projet/index.php?page=user&partie=privee&action=add");
}
exit ;