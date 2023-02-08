<?php 
// http://localhost/php-initiation/jour7/04-constructeur-suite.php

class A {
    public int $nombre = 20;
    public int $chiffre ;

    public function __construct(int $chiffre_p){
        $this->chiffre = $chiffre_p;
    }

    public function addition() : int{
        return $this->nombre + $this->chiffre ;
    }
}

$a = new A(100);
// echo $a ; // erreur 
// echo $a ."<br>"; // erreur 
echo $a->nombre . "<br>"; // OK 
echo $a->addition() . "<br>"; // OK
// public accéder à la valeur de la propriété DANS ($this) et HORS ($a) la class
// public 

// private 

class B {
    private int $score = 100;
    public function getScore(){ // getter 
        return $this->score ; // ok je peux accéder à la propriété score
    }
}

// la propriété score n'est UTILISABLE QUE DANS la class 
// impossible de l'utiliser HORS de la class

//$b = new B();

//$b->score ; // je ne connais pas cette propriété 
// Fatal error: Uncaught Error: Cannot access private property B::$score 
echo $b->getScore() . "<br>";  // ok

// encapsulation 
// stocker des valeurs / traitements dans une class // qui ne sont pas accessibles HORS de la class
// réaliser des traitements et de les sécuriser
// garantir QU'AUCUNE INSTRUCTION ne peut interagir avec vos traitements  


class C {
    private float $prix ;

    public function __construct(float $prix_p)
    {
        $this->prix = $prix_p ;
    }

    public function getPrixFr() :string {
        return number_format($this->prix , 2 , "," , " ") . " euros";
    }
}

$produit1 = new C(123.5);
echo $produit1->getPrixFr() ."<br>"; 
$produit2 = new C(2680);
echo $produit2->getPrixFr()  ."<br>"; 

// créer le fichier 05-exo.php
// ce fichier contient une class Livre
// contient 5 propriétés privées
// auteur texte
// jour chiffre entier
// mois chiffre entier
// année chiffre entier
// titre texte

// créer une fonction constructrice qui permet d'iniatiliser les 5 propriétés privées
// créer une méthode datefr qui permet d'afficher la date au format fr 
// jj/mm/aaaa
// créer une méthode description qui écrit le texte suivant 
// auteur a publié le titre le jj/mm/aaaa
// créer l'objet $livre1 qui aura comme valeur 
/* "Victor Hugo"
1
1
1880
"Notre Dame de Paris" */
// exécuter les deux méthodes datefr et description