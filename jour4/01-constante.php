<?php

// en php on crée des variables 
////////////////exemple1 creation de variable//////////////////
$premier = 1;

////////////////exemple1 creation de constante//////////////////

// il est aussi possible de créer des constantes en PHP 
// il faut passer par une fonction pour créer des constantes en PHP :
define("STATUS" , "payé");
echo STATUS ."<br>"; //on ne doit pas mettre de $ devant
// affiche j'ai paye ma facture


echo "j'ai {STATUS} ma facture <br>"; // ça ne marche pas
echo "j'ai " . STATUS ." ma facture <br>"; // utiliser les{.} 

//nouvelle maniere de creer des constantes
const LIVRAISON = "finalisee" ;
echo "la livraison est  " . LIVRAISON . "<br>";
// LIVAISON = 200;
//http://localhost/php-initiation/jour4/01-constante.php

//constante natives
//DIRECTORY_SEPARATEUR/ ENT_QUOTES|ENT_SUBSTITUTE| ENT_HTML401

echo __LINE__ . "<br>";

//les constantes magiques
//constante dont la valeur change en fonction de leur contexte d'execution
echo __FILE__ ."<br>";
echo __DIR__ ."<br>";
echo __LINE__ ."<br>";

//cas pratique => pouvez vous me recuperer le nom du fichier actullement exécuté ?? 
//$toto = explode(DIRECTORY_SEPARATOR , __FILE__);
$toto = explode("\\", __FILE__);
var_dump($toto);
//echo ($toto) ."<br>"; ne marchera pas 

echo $toto[5] . "<br>";
echo $toto[count($toto) - 1] . "<br>";
echo end($toto) . "<br>"; 