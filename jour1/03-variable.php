<?php
// en js pour creer une variable on doit utiliser le mot cle let ou const ou var
//const a = 10 ;

// en php pas de mot cle 
//on doit mettre le symbole $ devant le NomdelaVariable
$a =10;
//en js le ; final est facultatif
//ATTENTION en PHP le ; en fin d'instruction est obligatoire
//un seul ; manquant dans la page => STOP erreur fatale

$b=30;//les espaces avant et apres le symbole d'affectation = sont facultatifs
//comme en js vous allez avoir 5 types de valeurs que l'on stocker dans une variable

//string => texte
$c = "bonjour les amis";
$d = 'comment allez vous ???';
//chiffres chiffre entier/chiffre a virgule int /float

$e = 200; //entier/ integer
$f = -500;
$g = 1.2;
$h = -42.51;
//boolean
$i = true;
$j = false;
//3 types de base variable contient 1 valeur

// 1 variable stocker plusieursvaleurs => type complexe
//tableau
//objet
$k = ["pomme","poire","banane"];//tableau simple /tableau indexe (meme chose que js)
//-----------------------que en PHP--------------
//tableau associatifs qui n'existe pas en js
//contient 3 valeurs
$l = [
    "nom"=>"Alain",
    "age" => 20,
    "isadmin" =>true
];

//dernier type complexe objet Mais pour creer un objet en php il faut au prealable commencer par une class
//$m = {a : } ca ne fonctionne pas en PHP....
class M{}// d'abord creer un class
$m = new M();//l'objet $mest obligatoire issue de M
//class et objet en php et font l'objet d'une semaine speciale tant le sujet contient une grande information 

//en PHP vous avez un fichier php.ini=>fichier qui permet de modifier comme PHP fonction
//il est possible

