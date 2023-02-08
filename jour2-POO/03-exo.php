<?php 
// http://localhost/php-initiation/jour7/03-exo.php

class Exo {
    public int $note ;
    public string $enonce ;
    public array $sujets ;
    // 3 propriétés typés MAIS sans valeur 
    // utiliser la fonction constructrice la class pour les initialiser 
    // donner aux 3 propriétés une valeur
    public function __construct(int $note_s , string $enonce_p , array $sujets_p){
        $this->note = $note_s;
        $this->enonce = $enonce_p;
        $this->sujets = $sujets_p;
    }
    public function getAll() :string {
        return $this->note . " " . $this->enonce;
    }
}
$e1 = new Exo(20 , "créer une fonction" , ["créer", "exécuter"]) ; 
$e2 = new Exo(10 , "créer une variable" , ["lister", "compteur", "afficher"]);
// on ne peut pas concaténer un objet avec du texte
// $e1 = new Exo(20 , "créer une fonction" , ["créer", "exécuter"]) ."<br>" ;
// "erreur"
// echo $e1 . "<br>";
// erreur
// on peut concaténer une propriété d'un objet avec du texte
// on peut concaténer une méthode exécutée d'un objet  avec du texte
echo $e1->note . "<br>" ; // OK !!!
echo $e1->getAll() . "<br>";

// private // setter et getter 
// PDO class native de PHP 
// https://www.php.net/manual/fr/class.pdo.php
// 13h35 bon app