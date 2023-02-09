<?php

//http://localhost/php-initiation/jour4-POO/01-heritage.php

/* class Page {
    public string $titre = "titre page";
    public int $dureeLecture = 20 ;
} */

$p = new Page();
echo $p->titre ."<br>"; 

/* class PageAccueil {
    public string $titre = "titre page";
    public int $dureeLecture = 20 ;
    public function generer(){
        return "<h1>{$this->titre}</h1>";
    }
} */
// dans les deux class => une partie qui identique 
// pour éviter la répétition => il est conseillé d'utiliser l'héritage 
// copier TOUT le code d'une class dans une autre 

class Page { // class parent 
    public string $titre = "titre page";
    public int $dureeLecture = 20 ;
}

class PageAccueil extends Page{ // class qui hérite avec le mot extends class enfant 
    public function generer(){
        return "<h1>{$this->titre}</h1>";
    }
} // dans une class il est possible de reprendre INTEGRALEMENT le code d'une autre class 

function calcul(){
    $a = 2;
    $b = 5 ;
    $total = $a + $b ;
}

function description(){ // il n'est pas possible de récupérer le code d'une autre fonction => réécrire 
    $a = 2;
    $b = 5 ;
    $total = $a + $b ;
    return $total . " cm" ;
}