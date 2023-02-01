<?php 
// condition
// très proche de javascript 

$a = 45 ;

if($a < 10){

}elseif($a < 50){ //la seule différence est l'absence d'espace entre else et if

}else {

}

// fonction 
// créer des fonctions 
function b (){
    // stocker des instructions 
}
// exécuter les instructions stockées
b();

// paramètres dans les fonctions ET le typage (facultatif)
function c ( float $largeur , bool $test) {

}
// retourner une valeur qui peut être typé (facultatif)
function d () :int {
    return 10;
} // il ne faut pas confondre return et echo / var_dump()

// éviter le transtypage de php 
// declare(strict_types=1); // ajouter cette ligne pour le typage soit STRICTEMENT APPLIQUEE "23" => 23 

// la différence entre var_dump() et echo 
echo "<p>écrire dans le navigateur</p>" ; // document.querySelector().innerHTML 
var_dump($a); // écrire dans le navigateur valeur + type == console.log

// comment utiliser des tableaux

// tableau indexé
$etudiant = ["Pierre", "Paul" , "Jacques" ,"Céline"];

echo "{$etudiant[3]} a découvert le PHP <br>";

// tableau associatif 
$maison = [
    "adresse" => "75 rue de Lille",
    "enTravaux" => false ,
    "prix" => 100_000
];

// la maison a coûté 100000 euros
echo "la maison a couté {$maison["prix"]} euros <br>";

// http://localhost/php-initiation/jour3/01-rappel.php
// c:\xampp => xampp-control.exe