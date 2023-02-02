<?php
 $etudiants = 
 [
    [
        "nom" =>"Alain" , "age"=>18 
    ],
    [
        "nom" =>"Benoit" , "age" =>25 
    ],
    [
        "nom" =>"Céline" , "age" =>12 
    ],
    [
        "nom" =>"Denis" , "age" =>40 
    ]

 ];

// si vous appelez le fichier 06-exo.php => afficher toutes les étudiants
 //var_dump($etudiants);

 // si vous appelez le fichier 06-exo.php?age=15 => afficher toutes les étudiants dont l'age est supérieur à 15

 if(!empty($_GET)){
    $age = $_GET["age"];
    $etudiants_filtre = [];
    foreach($etudiants as $e){
        if($e["age"] >= $age ){
            array_push($etudiants_filtre , $e);
        }

    }
    $etudiants = $etudiants_filtre;

 }

 if ("age" >= 15) 
 {
    echo "<h1>afficher toutes les étudiants dont l'age est supérieur à 15</h1>";
}
elseif("age" <= 50){
 echo"<h1>afficher toutes les étudiants dont l'age est supérieur à 50</h1>";
}
else {
  echo"<h1>aucun</h1>";
}

 var_dump($etudiants);

 //http://localhost/php-initiation/jour4/06-exo.php


 // créer le fichier 07-exo.php 
// tableau multidimensionnel produits 
// [ "nom" : Playstation , prix 300.5 ]
// [ "nom" : Nintendo DS , prix 200 ]
// [ "nom" : Xbox , prix 320 ]

// si vous exécutez le fichier php sans aucune partie variable => afficher tous les produits 
// si vous exécutez le fichier php avec aucune partie variable => 07-exo.php?min=200&max=250
// [ "nom" : Nintendo DS , prix 200 ]
// si vous exécutez le fichier php avec aucune partie variable => 07-exo.php?min=0&max=310
// [ "nom" : Nintendo DS , prix 200 ] et [ "nom" : Playstation , prix 300.5 ]

 