<?php 
// http://localhost/php-initiation/jour2-POO/07-exo.php
$connexion = new PDO("sqlite:./06-bdd.db");
// effectuer une requête SQL 
// EXACTEMENT les requêtes SQL vues en cours ensemble 
// projet 
// html
// css (bootstrap / sass)
// js  (jquery)
// php (procédural / POO)
// SQL (SQLite / MySQL)
$connexion->query("
CREATE TABLE IF NOT EXISTS auteur (
    id INTEGER PRIMARY KEY AUTOINCREMENT , 
    prenom VARCHAR(200) , 
    nom VARCHAR(200) ,
    status BOOLEAN , 
    dt_creation DATE
)
");

// créer un nouveau fichier 08-exo.php
// vous connectez à la base 06-bdd.db

// insérer 4 lignes dans la table auteur
// Victor Hugo actif 01/01/2023
// George Sand actif 01/02/2023
// Jean Jacques Rousseau inactif 15/01/2012
// Arthur Rimbaud actif 01/01/2023