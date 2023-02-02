<?php
// 20-super-global.php

//les 9 variables crees automatiquement par PHP
//$_GET     ////$_get => n'existe pas
//$_POST                  "
//$_FILE                  "
//$_COOKIE                "
//$_SERVER                "
//$_SESSION               "
//$_REQUEST               "
//$_ENV                   "
//$_GLOBALS               "


//les super-global est utilisable N'IMPORTE OU dans votre code

// echo $_GET; //permet de recuperer des informations dans l'url
// function a (){
//     $b = $_GET; 
// }

var_dump($_GET);//  [] nous donner un tableau vide car on na rien mit comme parametre dans le url apres {?}
//http://localhost/php-initiation/jour4/02-super-global.php

var_dump($_GET);//  ["nom" => "Alain"]
//http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain

var_dump($_GET);//  ["nom" => "Alain" , "age"=> 20, "isAdmin"=>"false"]
//http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain&age=20&isAdmin=false
?>

<ul>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php">lien1</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain">lien2</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php?nom=Alain&age=20&isAdmin=false">lien3</a></li>
    <li><a href="http://localhost/php-initiation/jour4/02-super-global.php?page1">lien4</a></li>
</ul>
