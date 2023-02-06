<?php
//http://localhost/php-initiation/jour1-POO/02-membre-class.php

class Fleur {
    public string $nom = "rose";
    public float $prix = 20.5;
    public bool $enVente = true;
    public string $unite = "euro" ;
    //les trois variables  existe dans la class Fleur
    // le mot public est un scope
    //public veut dire qu'on peut utilise les variables dans la class
}
// on va creer notre objet 
$fleur = new Fleur();
//j'ai acheter uue rose a 20,5 euros

 // les 3 instructions précédentes = propriétés de la class 
    // 3 variables qui existe dans la cadre de la class 
    // typage est facultatif MAIS fortement conseillé => la langage PHP va relire 
    // votre code 
    // public scope => portée d'utilisation de la variable 
    // public utilisé (lire et modifier) DANS la class 
    // public utilisé (lire et modifier) HORS la class 


// créer un objet depuis la class Fleur dans la variable $fleur1
$fleur1 = new Fleur(); 

// j'ai acheté une Rose à 20,5 euros

// rappel en js 
// pour créer l'objet fleur 
// const fleur = { nom : "Rose" , prix : 20.5 , enVente : true   }
// fleur.nom 

echo $fleur1->nom  . "<br>";  // utiliser les symboles -> pour récupérer la valeur de la propriété nom 

echo $fleur1->prix . "<br>" ; 

// j'ai acheté une Rose à 20,5 euros

echo "j'ai acheté une " . $fleur1->nom . " à " . $fleur1->prix . " euros <br>";
echo "j'ai acheté une " . $fleur1->nom . " à " . number_format( $fleur1->prix , 1 , ",") . " " . $fleur1->unite.  "s <br>";

// créer le fichier 03-exo.php 
// dans ce fichier créer une class Etudiant qui contient 4 propriétés
// nom Alain
// age 24
// adresse 75 rue de Paris
// competences ["js" et "php"]

// une fois créée => créer une instance (objet) $etudiant 
// grâce à cette instance vous allez écrire dans le navigateur les phrases suivantes 

// Alain habite au 75 rue de Paris
// A 24 ans il maîtrise 2 technologies 