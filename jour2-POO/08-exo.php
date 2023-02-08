<?php

// http://localhost/php-initiation/jour2-POO/08-exo.php

$connexion = new PDO("sqlite:./06-bdd.db");

/* $connexion->query("
    INSERT INTO auteur 
    ()
    VALUES 
    () ,
    () ,
    () ,
    () ;
"); */

$connexion->query("INSERT INTO auteur
(prenom , nom , status , dt_creation )
VALUES
('Victor', 'Hugo' , TRUE , '2023-01-01'),
('George', 'Sand' , TRUE , '2023-02-01'),
('Jean Jacques' , 'Rousseau' , FALSE , '2012-01-15'),
('Arthur' , 'Rimbaud' , TRUE , '2023-01-01');");