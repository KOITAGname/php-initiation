<?php

// http://localhost/php-initiation/jour2-POO/09-exo.php

$connexion = new PDO("sqlite:./06-bdd.db");

// $connexion->query("UPDATE auteur SET dt_creation = '2012-01-01' WHERE id = 1");
// echo "mise a jour effectuée";

$connexion->query("DELETE FROM auteur  WHERE id >= 5");
echo "suppression effectuée";


// www => Apache => php => fichier => traiter => si ok "suppression effectuée" / si ko