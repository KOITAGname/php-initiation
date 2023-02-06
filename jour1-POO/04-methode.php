<?php
// http://localhost/php-initiation/jour1-POO/04-exo.php


class Formation {
    // 2 propriétés
    public string $nom = "Développeur Web";
    public int $duree = 20 ; 

    // fonction => méthode de class 
    public function presentation( string $sujet ) : string {
        return "je suis une formation sur  {$sujet}" ;
    }
}

// extérieur de la class => hors de la class 

$f = new Formation();

echo $f->nom . "<br>"; // utilisé une propriété hors de la class 

echo $f->presentation("css") ."<br>"; // exécuter une méthode hors de la class 

echo $f->presentation("php poo") ."<br>"; 

// créer le fichier 05-exo.php 
// dans ce fichier vous allez créer une class Exo
// contient 1 propriété note qui est un chiffre entier 

// contient 2 méthodes 
// enonce fonction ne dispose d'aucun paramètre et retourne du texte 
// veuillez réalisé l'exercice suivant ...

// conseil fonction qui dispose d'un paramètre boolean et retourne du texte 
// si le boolean est true alors la fonction retour "voici une vidéo à regarder"
// si le boolean est false alors la fonction retour "aucune astuce pour cet exo"

// exécuter les deux méthodes de la class Exo et afficher les résultats dans le navigateur 