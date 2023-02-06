<?php
//http://localhost/php-initiation/jour1-POO/07-exo.php

class Cercle{
    public int $rayon = 30;

    public function aire() : float{
        return(3.14 * ($this->rayon * $this->rayon));
        //return 3.14 * $this->rayon ** 2;

    }

    public function perimetre() : float{
        return(2 * 3.14 * $this->rayon );

    }

}

$cercle = new Cercle();
$cercle -> rayon;
echo $cercle -> aire(). "<br>";
echo $cercle -> perimetre();