<?php
//07-traitement-string.php
//concatenation = addition plusieurs textes

$prenom = "Alain";
$nom = "DOE";
//Alain DOE decouvre le PHP
$phrase = "$prenom $nom decouvre le php"; //concatenation "" dans les guillemets
//j'ai ecris les variables

echo $phrase;

//http:localhost/php-initiation/jour1/07-traitement-string.php

//2eme maniere
$phrase2 = "{$prenom} {$nom} decouvre le PHP";
echo $phrase2;

//3eme maniere
$phrase3 = $prenom ."".$nom . "decouvre le PHP";
echo $phrase3;

//ecrire avec php la phase suivant
//victor hugo a dit "vive les Miserables"
//caractere d'echapement

$parole = "victor hugo a dit \"vive les Miserable\"";

//utilisation du symbole anti slash devant les guillements a interpreter comme des guillement et non comme la fin d'une string

echo $parole;
//si vous vouler que le texte sauter,une ligne au prochain echo il faut ajouter la balise html <br> a la fin de la concatenation
//par defaut il n'ya pas 

$unTexte = "<div>bonjour , comment allez vous$prenom?<div>";
echo $unTexte;
