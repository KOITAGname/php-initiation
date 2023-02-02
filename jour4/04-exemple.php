<?php
$data = 
[
    [ "id" => "1" , "texte" => "je suis l'article 1"],
    [ "id" => "2" , "texte" => "je suis l'article 2"],
    [ "id" => "3" , "texte" => "je suis l'article 3"],
];
// si exécute le fichier php 
// http://localhost/php-initiation/jour4/04-exemple.php
// j'affiche le tableau data en intégralité 
// http://localhost/php-initiation/jour4/04-exemple.php?id=1
if(!empty($_GET)){                       // détecte si il y a la partie variable dans l'url 
    $id = $_GET["id"];                   // récupérer le chiffre dans l'url
    $recherche = [];                     // je crée une variable qui est un tableau vide 
    foreach($data as $d){                // parcourir le tableau multidimensionnel $data 
        if($d["id"] === $id){            // est ce que l'élément $d["id"] === id dans l'url
            array_push($recherche, $d);  // ajouter un élément à un tableau vide
        }
    }
    $data = $recherche ;                 // remplacer le tableau multidimentionnel par le rempli
}
// $data = [ [ "id" => "1" , "texte" => "je suis l'article 1"]]
var_dump($data);

///////////affichage avec les conditions////////////
// affichage 
if(count($data) === 1){
    echo "<h1>page article</h1>";
    var_dump($data);
}elseif(count($data) > 1){
    echo "<h1>page d'accueil</h1>";
    var_dump($data);
}else{
    echo "<h1>erreur 404</h1>";
    var_dump($data);
}
//http://localhost/php-initiation/jour4/04-exemple.php