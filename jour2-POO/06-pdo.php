<?php 
// http://localhost/php-initiation/jour7/06-pdo.php

// comme les fonctions natives de php 
// strlen() count() filter_var() empty() format_number() ...

// il existe aussi des class natives => livrées dans la langage : function = == === ++ ... if for foreach 
// utiliser une class native

// class native => PDO = PHP Data Object

//  strlen(string $string): int

// https://www.php.net/manual/fr/class.pdo => présentation de la class en entier 
// class 
// toutes les propriétés et toutes méthodes

// class l'ensemble des méthodes public de la class avec leur signature 
// le nom de la méthode 
// paramètres et leur type hinting
// le type du retour des méthodes 

// PDO permet de manipuler des bases de données 
// exécuter des requêtes SQL directement avec elle

// CREATE TABLE 
// ALTER TABLE 

// INSERT  
// SELECT 
// UPDATE
// DELETE
// installez l'extension SQLite de alexcvzz 

// créer un fichier 06-bdd.db 
// http://localhost/php-initiation/jour2-POO/06-pdo.php

$connexion = new PDO("sqlite:./06-bdd.db") ; 

$connexion->query("CREATE TABLE IF NOT EXISTS article ( titre VARCHAR(20) , contenu TEXT )");

// exécuter du SQL dans un fichier PHP !!

// créer un nouveau fichier 07-exo.php
// créer une nouvelle instance de PDO qui va se connecter à la base 
// 06-bdd.db 

// créer une table 
// auteur
// dispose de 5 colonnes 
// id clé primaire
// prenom texte maximum de 200 lettres 
// nom texte maximum de 200 lettres 
// status actif / inactif
// dt_creation annee mois jour 

// afficher cette table dans l'explorer SQLite