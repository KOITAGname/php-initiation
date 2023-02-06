<?php 
// http://localhost/php-initiation/jour6/03-exo.php

class Etudiant {
    public string $nom = "Alain";
    public int $age = 24 ;
    public string $adresse = "75 rue de Paris" ;
    public array $competences = ["js" , "php"];
}

$etudiant = new Etudiant();

// Alain habite au 75 rue de Paris
echo $etudiant->nom . " habite au " . $etudiant->adresse ."<br>";
echo "{$etudiant->nom} habite au  {$etudiant->adresse} <br>";

// A 24 ans il maîtrise 2 technologies 
echo "A " . $etudiant->age . " ans  il maîtrise " . count($etudiant->competences) . " technologies <br>";
echo "A {$etudiant->age} ans  il maîtrise " . count($etudiant->competences) . " technologies <br>";