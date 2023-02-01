<?php

// tableau de tableau
// formation
// [ nom : "js" , prix : 2300,20 , sujets : ["install", "navigateur", "formulaire"]  ]
// [ nom : "php" , prix : 750,55 , sujets : ["xampp", "apache"]  ]

// écrire dans le navigateur 

// la formation js coûte 2 300,2 euros et contient 3 sujets
// la formation php coûte 750,5 euros et contient 2 sujets


$formation = 
[
    [
        "nom" =>"js" ,
        "prix"=> 2300.2349,
        "sujets"=> ["install", "navigateur", "formulaire"]

    ],
    [
        "nom" => "php" ,
        "prix" => 750.5679 ,
        "sujets" => ["xampp", "apache"] 

    ]

];

// la formation js coûte 2 300,2 euros et contient 3 sujets
foreach($formation as $formations){

    $prixFr = number_format($formations["prix"] , 3 , "," , " ") ;
    $nbSujet = count($formations["sujets"]);
    echo"<p>la formation {$formations["nom"]} coute  {$prixFr} euros et contient {$nbSujet} sujets</p> ";
    };


    //http://localhost/php-initiation/jour3/06-exo.php