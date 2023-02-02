<?php
$produits = 
[
    [ 
        "nom" => "Playstation" , "prix" =>300.5 
    ],
    [ 
        "nom" => "Nintendo DS" , "prix" =>200 
    ],
    [ 
        "nom" => "Xbox" , "prix" =>320 
    ]
];
//var_dump($produits);


if(!empty($_GET)){
    $min = $_GET["min"];
    $max = $_GET["max"];

    $recherche_prix = [];
    foreach($produits as $p){
        if($min <= $p["prix"] && $max >= $p["prix"]){
            array_push($recherche_prix , $p);

        }

    }
 $produits = $recherche_prix;
};

var_dump($produits);

//http://localhost/php-initiation/jour4/07-exo.php