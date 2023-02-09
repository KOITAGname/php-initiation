<?php
//http://localhost/php-initiation/jour4-POO/04-exo.php
class form{
    public int $nbCote;
    public  string $couleur;
    public function surface () : int{
        return 10;

    }
}

class Rectangle extends form{
    public int  $nbCote = 4;
    public string $couleur = "blue";
}

$r=new rectangle();

echo ($r->surface());
