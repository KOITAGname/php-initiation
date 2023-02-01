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
        echo "{$dev}<br>";
    }
    
