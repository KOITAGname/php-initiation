<?php
//10-traitement-boolean.php

$toto = false;
$titi = true;
$test1 = 50>10;//true

echo $test1 ; //affiche 1
var_dump($test1);//affiche true

$test2 = 50 < 10;//false

echo $test2 ; //n'affiche rien
var_dump($test2);//false
//var_dump() est conseille pour debugger les variables boolean
/////////////////////////////////////////////////////////
// var_dump() est conseillé pour débugger les variables boolean

// > < >= <= == != === !== (les mêmes que js)

$test3 = 10 === "10" ; // false
// vérif en valeur et type
var_dump($test3);

$test4 = 10 == "10" ; // true
// vérifier la valeur et transtypage 
var_dump($test4);

// && || ! (les mêmes que js)

$test5 = 10 > 30 || 20 < 30 ;
//         false ||  true
//          true
var_dump($test5); // true 

// => déconseille d'utiliser à la place de && => AND
// => déconseille d'utiliser à la place de || => OR

$test6 = 80 > 60 AND 12 < 11 ;
//        true  AND   false 
//        true  
var_dump($test6);


//creer le fichier 11-exo.php
/**dire est ce que c'est true /false**/
//expression	true ou false ??
// 2 >= 2	
//  "a" == "ab"	
//  2 =! 3 && 10 < 33	
//  "hello" > "bonjour" 	
//  2 ==  "2"	
//  2 === "2"	
//  (2 != 5 && 3 > 4 ) || 2 <= 14 	
//  2 != 5 && ( 3 > 4  || 2 <= 14 ) 	
//  2 != 5 && 3 > 4  || 2 <= 14  	
