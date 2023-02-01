<?php

$serveur = [ // tableau associatif qui contient 5 valeurs 
    "source" =>  "c:\\",
    "langage" => "HTML",
    "protocole" => "http",
    "host" => "localhost",
    "fichier" => "index.php " 
];


// XAMPP lance un serveur qui écoute l'adresse http://localhost

$adresse = "{$serveur["protocole"]}://{$serveur["host"]}";
echo " XAMPP lance un serveur qui écoute l'adresse {$adresse}<br>";
// var_dump(" XAMPP lance un serveur qui écoute l'adresse {$adresse}");

// le fichier en cours d'exécution est http://localhost/index.php et il est en HTML

echo "le fichier en cours d'exécution est {$adresse}/{$serveur["fichier"]} et il est en {$serveur["langage"]}";

// http://localhost/php-initiation/jour2/12-correction.php

