<?php 
// http://localhost/php-initiation/jour7/05-exo.php

class Livre{
    private string $auteur ;
    private int $jour ;
    private int $mois ;
    private int $annee ;
    private string $titre ;
    public function __construct(string $auteur_p,int $jour_p,int $mois_p,int $annee_p ,string $titre_p
    ){
        $this->auteur = $auteur_p;
        $this->jour = $jour_p;
        $this->mois = $mois_p;
        $this->annee = $annee_p;
        $this->titre = $titre_p;
    }
    public function getDateFr() :string {
        //return $this->jour ."/". $this->mois . "/" . $this->annee ;
        $timeStamp = mktime(0,0,0, $this->mois ,$this->jour, $this->annee); // timestamp
        // le nombre de secondes entre 1er janvier 1970 et la date concernée
        return date( "d/m/Y" , $timeStamp ); 
        // même que sur SQL strftime() https://sqlite.org/lang_datefunc.html
    }
    public function description(){
        return "{$this->auteur} a publié le {$this->titre} le " .$this->getDateFr() ;
    }
}
$livre1 = new Livre("Victor Hugo",1 ,1 ,1880 ,"Notre Dame de Paris") ; // "1880-1-1" "1880-01-01"
echo $livre1->getDateFr() . "<br>";
echo $livre1->description() . "<br>";
// PDO 