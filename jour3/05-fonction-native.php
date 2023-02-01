<?php 
// http://localhost/php-initiation/jour3/05-fonction-native.php
// en des mots clés de base de l'information
// if for function ++ = >= ""

// en + de ces mots clés PHP il est livré avec 500 fonctions natives 

// dans la langage => des fonctions qui vont permettre de réaliser des traitements 

$tab = ["a", "b" , "c",1,2,3];

echo count($tab) . "<br>"; // 6 la taille du tableau 

// php.net
//  count(Countable|array $value, int $mode = COUNT_NORMAL): int

// 5 types de bases 

// string 
// chiffres int / float
// boolean
// array => count()
// object 


// fonction native de php pour manipuler les string 
// echo afficher une texte à l'écran
$texte = "bonjour<br>";
echo($texte);
echo $texte;

// explode permet de transformer un string en array (tableau)
$description = "2,cm,20,mètre";
$resultat = explode("," , $description); // [ "2", "cm", "20" , "mètre" ];
var_dump($resultat);
echo $resultat[count($resultat) - 1] ."<br>"; // "mètre"

//nous permet de  récupérer le nom du fichier exécuté 
$url = "http://localhost/php-initiation/jour3/05-fonction-native.php";
$tabUrl = explode("/" , $url); 
// ["http:","","localhost", "php-initiation", "jour3" , "05-fonction-native.php"]
echo $tabUrl[count($tabUrl) - 1]  ."<br>"; // 05-fonction-native.php

// htmlentities 
$virus = "<script>window.location.href='https://google.fr'</script>";
echo htmlentities ($virus) ."<br>";  // bloquer execution du html qui contient du js 
/////////////////les nombres////////////////
// number_format —
$prix = 2532.44 ;
// 2 532,44
echo number_format($prix) . "<br>";
echo number_format($prix , 2) . "<br>";
echo number_format($prix , 2 , ",") . "<br>";
echo number_format($prix , 2 , "," , " ") . "<br>";

// str_contains 
// est ce que un texte contient un texte ???
$titre = "nouvel article sur le php";
// est ce que dans $titre il y a le mot php ???
$recherche = str_contains($titre , "php");
var_dump($recherche); // true 

// strlen 
$paragraph = "lorem ipsum" ;
echo strlen($paragraph) . "<br>"; // affiche 11

// substr_replace 
// remplacer un texte dans un autre texte

$activite = "j'aime manger des frites" ;

echo substr_replace($activite,"pommes", 18,6 ). "<br>"; 
// j'aime manger des pommes

echo substr_replace($activite," et des pommes", 24 , 0 ). "<br>"; 
// j'aime manger des frites et des pommes


// créer le fichier 06-exo.php 

// tableau de tableau
// formation
// [ nom : "js" , prix : 2300,20 , sujets : ["install", "navigateur", "formulaire"]  ]
// [ nom : "php" , prix : 750,55 , sujets : ["xampp", "apache"]  ]

// écrire dans le navigateur 

// la formation js coûte 2 300,2 euros et contient 3 sujets
// la formation php coûte 750,5 euros et contient 2 sujets