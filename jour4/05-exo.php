<?php
// créer le fichier 05-exo.php 
// créer une variable $fleurs tableau multidimensionnel
// [ nom rose , prix 200 , origin : France ]
// [ nom jasmin , prix 300 , origin : Tunisie ]
// [ nom muguet , prix 150 , origin : Allemagne ]

// si vous exécuter  le fichier 05-exo.php => afficher à l'écran toutes les fleurs
// si vous exécuter  le fichier 05-exo.php?nom=rose => afficher à l'écran uniquement la rose
// si vous exécuter  le fichier 05-exo.php?nom=jasmin => afficher à l'écran uniquement le jasmin
// si vous exécuter  le fichier 05-exo.php?nom=muguet => afficher à l'écran uniquement le muguet
// si vous exécuter  le fichier 05-exo.php?nom=blabla => afficher une page d'erreur 404
$fleurs =
[
    [ 
        "nom" =>"rose" , "prix" =>200 , "origin" => "France" 
    ],
    [ 
        "nom" =>"jasmin" , "prix" =>300 , "origin" => "Tunisie" 
    ],
    [ 
        "nom" =>"muguet" , "prix" =>150 , "origin" => "Allemagne" 
    ]

];
//var_dump($fleurs);

//http://localhost/php-initiation/jour4/05-exo.php

if(!empty($_GET)){
    $nom = $_GET["nom"];
    $recherche =[];
    foreach($fleurs as $f){
        if($f["nom"] === $nom){
            array_push($recherche ,$f);
        }

    }
    $fleurs = $recherche ; 
}
if (count($fleurs) === 1) {
    echo "<h1>une fleur</h1>";
}elseif(count($fleurs) > 1){
    echo " <h1> toutes les fleurs </h1>";
}
 else {
    echo " <h1> aucune fleur </h1>";
}

var_dump($fleurs);


