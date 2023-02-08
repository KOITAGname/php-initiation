<?php
session_start();
//nous permet de verifier si le formulaire (form) exiter
//var_dump ($_POST);
?>

<?php
//creation d'une class vide
$erreurs = [];
// est ce que tous les champs sont bien remplis ??
if(
    empty($_POST["nom"])||
    empty($_POST["email"])||
    empty($_POST["password"])||
    empty($_POST["menu"])||
    empty($_POST["date"])||
    empty($_POST["case"])

    ){
array_push($erreurs , "Veuillez remplir tous les champs");
    }

//on tester le nombre de caracteres du champ nom
if(strlen($_POST["nom"]) <= 4 || strlen($_POST["nom"]) >= 255){
    array_push ($erreurs , "le champ nom doit contenir entre 4 et 255 caracteres");
}


// on vérifier si l'email est un  email conforme
if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "l'email saisi n'est pas valide");
}

// on tester le nombre de caractères du champ password 
if(strlen($_POST["password"]) <= 4 || strlen($_POST["password"]) >= 255){
    array_push($erreurs , "le champ password  doit contenir entre 4 et 255caractères");
}

/////////on verifier si les trois menu exister//////////
$listeMenu = ["user", "redacteur", "admin"];
if(!in_array($_POST["menu"] ,$listeMenu)){
    array_push($erreurs , "Vous ne pouvez etre que user, redacteur, admin");
}

///on  verifier que le champ date a bien transmis une date au format AAAA-MM-JJ  
if(!strtotime($_POST["date"])){ 
    array_push($erreurs , "le champ date de création n'est pas conforme");
}
 /////////// a refaire//////////
 if (isset($_POST["case"])) {
    $_POST["case"]= true;
  } else {
    $_POST["case"]= false;
  }
//on  stocker les valeurs saisies dans le formulaire pour les réafficher en cas d'erreur 

$_SESSION["form"] = $_POST ;

// si tout est bon => pas d'erreur 
//on verifier si le tablaeu $erreurs est vide
if(count($erreurs) === 0)
{
    // dire merci 
    $_SESSION["message"] = [
        "alert" => "success",
        "info"  => "merci l'utilisateur est bien enregistré"
    ];

      // INSERER les informations en base de données
      $connexion = new PDO('sqlite:./base-users.db');

      //creation de table users 
      $connexion->query("
          CREATE TABLE IF NOT EXISTS users (
              id INTEGER PRIMARY KEY AUTOINCREMENT ,
              nom VARCHAR(255) ,
              email VARCHAR(255) , 
              password VARCHAR(255) ,
              menu VARCHAR(9),
              date DATE,
              `case` BOOLEAN
          )
      ");
     
      
      //on va INSERER les donnees
    $sth = $connexion->prepare("
      INSERT INTO users
     (nom , email , password, date , menu,  `case`)
      VALUES
     (:nom , :email , :password, :date , :menu,  :case)
  ");

   // requête préparée => requete dans laquelle on prévient PHP que il y a des champs sous la forme :col
   $sth->execute($_POST);
   // vider la $_SESSION["form"]
   $_SESSION["form"] = [];
   
}
else {
   // dire les erreurs 
   $_SESSION["message"] = [
       "alert" => "danger",
       "info"  => $erreurs
   ];

 }
 // redirection le formulaire 
header("Location: http://localhost/php-initiation/gestion-utilisateur/form.php");
// stop 
exit ; 