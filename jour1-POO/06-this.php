<?php
//http://localhost/php-initiation/jour1-POO/06-this.php

class Rectangle {
    public int $largeur = 20;
    public int $hauteur = 30;
    public function calculPerimetre() : int {
        //(20 * 30) *2
        //(largeur + hauteur)*2
        return($this->largeur + $this->hauteur)*2;
    }
}
//quant on veut utilise une variable dans la FUNCTION on utuliser THIS 
// en dehors de la FUNCTION on utiliser NEW en creant une class
$rectangle = new Rectangle();
$rectangle->largeur;
echo $rectangle->calculPerimetre() ."<br>";