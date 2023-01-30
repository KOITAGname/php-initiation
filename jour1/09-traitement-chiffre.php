<?php
$a = 10;
$b = 30;

echo $a + $b . "<br>"; // addition
echo $a - $b . "<br>"; // soustraction
echo $a * $b . "<br>"; // multiplication
echo $a / $b . "<br>"; // division
echo $a ** $b . "<br>";// puissance
echo $a % $b . "<br>"; // modulo

//http:localhost/php-initiation/jour1/09-traitement-chiffre.php

$animaux = "12 vaches";
$prix = "500 euros";
$total = $animaux * $prix;
echo $total;
// http://localhost/php-initiation/jour1/09-traitement-chiffre.php

$animaux = "12 vaches" ;
$prix = "500 euros" ;
$total = @($animaux * $prix) . "<br>";
echo $total ;

// @traitement => permet d'éviter d'afficher les warning à l'écran

$c = 30 ;
$d = "40" ;
echo $c + $d ."<br>"; // 70 en PHP mais en JS "3040"

/* $e = 30 ;
$f = "40 francs" ;
echo $e * $f ; */


