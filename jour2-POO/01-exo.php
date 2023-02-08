<?php 
// http://localhost/php-initiation/jour7/01-exo.php 
class Immeuble {
    public string $adresse = "102 rue de Lille" ;
    public array $habitants = ["Alain" , "Céline" , "Pierre" , "Zorro"];
    public bool $etatAscenseur = false ;
    public function infoMaintenance () :string{
        if($this->etatAscenseur === false){ // soit == soit === MAIS PAS =
            return "l'ascenseur est en panne" ;
        }else {
            return "l'ascenseur est en fonctionnel" ;
        }
    }
    public function description() : string{
        // Alain Zorro et Céline habitent au 102 rue de Lille 
        return "{$this->habitants[0]} {$this->habitants[3]} et {$this->habitants[1]} habitent au {$this->adresse}";
    }
}
$immeuble = new Immeuble() ; // créer l'objet $immeuble 
echo $immeuble->infoMaintenance() ."<br>"; // ne pas oublier les () à la fin sinon c'est une propriété
echo $immeuble->description() . "<br>";

// commentaire faire pour donner une valeur variable aux propriétés d'une class 

// méthode magique constructeur 

class A {
    public int $largeur ; // créer une propriété de class

    public function __construct($largeur_p) 
    // fonction magique qui contient une instructions
    {
        $this->largeur = $largeur_p; // donne une valeur à $this->largeur 
    }
}
