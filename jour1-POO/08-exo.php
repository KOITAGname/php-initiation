<?php
//http://localhost/php-initiation/jour1-POO/08-exo.php

class Formation{
    public string $nom = "devOps";
    public int $duree = 5;
    public int $prix = 5000;
    public array $matieres = ["linux" , "php" , "html" ,"css"];

    public function devis() :string{
        return("la formation " . $this->nom . " coute " .number_format( $this->prix) . " euros" );

    }

    public function programme() : string{
        return("il ya " . count($this->matieres). " sujets abordes durant les " . ($this->duree). " semaines");

    }
     
    public function sommaire() : string{
        return("vous allez etudie {$this->matieres[0]} ,{$this->matieres[1]} ,{$this->matieres[2]} {$this->matieres[3]}");


    }


}

$formation = new Formation();
echo $formation->devis() ."<br>";
echo $formation->programme() ."<br>";
echo $formation->sommaire() ."<br>";