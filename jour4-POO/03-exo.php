<?php
class Article{
public string $titre;
public string $contenu;
public string $dt_creation;

public function genererHTML() : string{
    return
(
    "<article>
    <h2>{$this->titre}</h2>
    <p>{$this->contenu}</p>
    <p>date de creation : {$this->dt_creation}</p>
    </article>"
);
}

}

class ArticleTechnique extends Article{
    public string $titre = "Article technique";
    public string $contenu="lorem ipsum";
    public string $dt_creation="09/02/2023";

}

$a= new ArticleTechnique();
echo $a->genererHTML();

//http://localhost/php-initiation/jour4-POO/03-exo.php