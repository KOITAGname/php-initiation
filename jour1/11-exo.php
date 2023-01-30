<?php
// expression	true ou false ??
// 2 >= 2	
//  "a" == "ab"	
//  2 =! 3 && 10 < 33	
//  "hello" > "bonjour" 	
//  2 ==  "2"	
//  2 === "2"	
//  (2 != 5 && 3 > 4 ) || 2 <= 14 	
//  2 != 5 && ( 3 > 4  || 2 <= 14 ) 	
//  2 != 5 && 3 > 4  || 2 <= 14  	 


$toto = false;
$titi = true;
$test1 = 2>=2;//true

var_dump($test1);//true

$test2 = "a"== "ab";//true

var_dump($test2);//false
// http://localhost/php-initiation/jour1/11-exo.php


$test3 = 2 ==! 3 && 10 < 33;//true
/////////////////////////////////////////////////
////////////////correction////////////////
var_dump(2 >= 2); // true
// http://localhost/php-initiation/jour1/11-exo.php

var_dump("a" == "ab"); //false 

var_dump(2 != 3 && 10 < 33);
        // true && true
        // true

var_dump("hello" > "bonjour" );
        // true 
var_dump(2 ==  "2"); // true

var_dump(2 === "2"); // false

var_dump((2 != 5 && 3 > 4 ) || 2 <= 14 );
        // (true && false) || true
        // false || true
        // true
var_dump(2 != 5 && ( 3 > 4  || 2 <= 14 ) );
        // true && (false || true)
        // true && true
        // true
var_dump(2 != 5 && 3 > 4  || 2 <= 14 );
        // true && false || true
        // false || true
        // true