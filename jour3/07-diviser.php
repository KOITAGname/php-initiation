<?php 

// --------------
// variable

$depenses = [12 ,20,30,50]; // require

// --------------
// fonctions

function total(array $tab) : int{
    return array_sum($tab); 
}

// execution de fonction 

echo total($depenses); 
// http://localhost/php-initiation/jour3/07-diviser.php