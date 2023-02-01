<?php


// tableau qui contiennent des objets en js collection
// tableau indexé qui contiennent des tableaux associatifs 
// tableau multi dimensions
$etudiants = [
    [
       "nom" => "Alain",
       "age" => "22",
       "competences" => ["js" , "css"]
    ],
    [ 
        
        "nom" => "Celine",
        "age" => "12",
        "competences" => ["php" , "sql"]
    ]
    ];

    //Alain maitrise le css
    //$etudiants[0]["nom"]
    //$etudiants[0]["competences"][1]

    echo"{$etudiants[0]["nom"]} maitrise le {$etudiants[0]["competences"][1]}<br>";
    echo ($etudiants[0]["nom"] ." maitrise le " .$etudiants[0]["competences"][1]);

    //http://localhost/php-initiation/jour3/03-tableau-suite.php

    //ecrire dans le navigataire le texte suivant
    //celine qui a 12 ans maitrise le php

    //$etudiants[1]["Celine"]
    //$etudiants[1]["age"]
    //$etudiants[1]["competences"][0]

    echo"<p>".$etudiants[1]["nom"]." qui a " .$etudiants[1]["age"] . " ans maitrise le  " . $etudiants[1]["competences"][0]."</p>";

    echo"<p>{$etudiants[1]["nom"]} qui a {$etudiants[1]["age"]}ans maitrise le {$etudiants[1]["competences"][0]}</p>";

    //ecrire les deux phrase suivantes(utiliser les boucles)

    //Alain débute sur css et maitrise js
    //Celine débute sur sql et maitrise php

    foreach($etudiants as $dev){ // $tableau[$i]
        echo "<p>{$dev["nom"]} débute sur {$dev["competences"][1]} et maitrise {$dev["competences"][0]} </p>";
    };
    

for($i = 0 ; $i < count($etudiants) ; $i++){
    echo "<p>{$etudiants[$i]["nom"]} débute sur {$etudiants[$i]["competences"][1]} et maîtrise {$etudiants[$i]["competences"][0]}</p>";
}

// créer le fichier 04-exo.php 
// créer une variable qui s'appelle villes qui est de type tableau indexé
// ce tableau contient 2 tableaux associatifs 

$ville = [
[
    "nom"=> "Paris",
   "nbHabitant" => 5_000_000,
    "arrondissements" => 20 ,
   " monuments "=> [ "sacré coeur" , "tour eiffel" ]
],

[
    "nom" =>"Marseille",
    "nbHabitant" => 3_000_000,
    "arrondissements" => 15, 
    "monuments"=>["vieux port" , "vélodrome"]
]
];

/* écrire dans le navigateur les phrases suivantes 
lorsque je vais à Paris je vais visiter deux monuments : sacré coeur et  tour eiffel
lorsque je vais à Marseille je vais visiter deux monuments : vieux port et vélodrome */