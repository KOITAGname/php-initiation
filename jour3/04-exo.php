<?php

$ville = [
    [
       "nom"=> "Paris",
       "nbHabitant" => 5_000_000,
       "arrondissements" => 20,
       "monuments"=> ["sacré coeur" , "tour eiffel"]
    ],
    
    [
        "nom" => "Marseille",
        "nbHabitant" => 3_000_000,
        "arrondissements" => 15, 
        "monuments"=>["vieux port" , "vélodrome"]
    ]
    ];


//écrire dans le navigateur les phrases suivantes:

//lorsque je vais à Paris je vais visiter deux monuments : sacré coeur et  tour eiffel

//lorsque je vais à Marseille je vais visiter deux monuments : vieux port et vélodrome */

foreach($ville as $villes){ 
    echo "<p>lorsque je vais à {$villes["nom"]} je vais visiter deux monuments : {$villes["monuments"][0]} et {$villes["monuments"][1]} </p>";
};




//http://localhost/php-initiation/jour3/04-exo.php