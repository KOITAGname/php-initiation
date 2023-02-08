<?php 
// http://localhost/php-initiation/jour7/02-constructeur.php

class A{
    // on peut créer des propriétés et des méthodes
    // en PHP certain nom de méthodes 
    public function __construct()
    // méthode magique => respectez le nom de la méthode
    // __construct => bien respecté les __ et minuscules
    // méthode à un sens particulier pour PHP 
    // cette méthode s'exécute AUTOMATIQUEMENT lors que vous créez un objet
    {
        
    }
    public function toto(){}// méthode de base 
}

$a = new A() ; // + création objet $a ET __construct()
// la class contient la méthode __construct() AUTOMATIQUEMENT exécutée
// il n'ya QUE cette méthode qui s'exécute AUTOMATIQUEMENT
// toutes les autres méthodes il faut les appeler
$a->toto();

class B {
    public string $nom ; // SANS le = SANS valeur // propriété
    public int $largeur ; // SANS le = 

                         // paramètre 
    function __construct( string $nom_p , int $largeur_p ){ 
        // la fonction constructrice de la class
        // permettre de définir la class 
        // le role du constructure :
        // remplir de paramètre et d'instruction qui vont initialiser des propriétés 
        $this->nom = $nom_p ; // "bonjour" // donne une valeur à une propriété depuis un paramètre 
        // $this->nom = "bonjour" ;
        $this->largeur = $largeur_p ; // 42 
    }
}

$b = new B("bonjour" , 42);
// donc 

// créer le fichier 03-exo.php 
// créer une class Exo qui contient 3 propriétés
// note chiffre entier
// enonce texte
// sujets un tableau

// class dispose d'une fonction constructrice qui initialise ses trois propriétés

// créer un objet $e1 qui aura comme arguments 20 "créer une fonction"  , ["créer", "exécuter"]
// créer un objet $e2 qui aura comme arguments 10 "créer une variable"  , ["lister", "compteur", "afficher"]