<?php 
require "09-data-variable.php";
//var_dump($villes);

//http://localhost/php-initiation/jour4/09-exo.php

if(!empty($_GET) &&
 isset($_GET["nom"])){////nous permet de verifier si les deux conditions sont vraie 
    $nom =$_GET["nom"];
    $new_ville = [];
    foreach($villes as $v){
        if($v["nom"]== $nom){
            array_push($new_ville, $v);

        }

    }
$villes = $new_ville;
};

//var_dump($villes);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div>
            <nav>
                <ul>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php"></a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php/nom=Paris"></a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php/nom=Grenoble0"></a></li>
                </ul>
            </nav>
        </div>
    </header>

<div class="container">
        <section class="row">
            <!--  3 cas 
                afficher plusieurs villes
                affivher une seul villes
                afficher une ville inconnu
                http://localhost/php-initiation/jour4/09-exo.php
            --> 
<!-- -------------------- plusieurs villes------------------- -->
<?php if(count($villes) > 1) : ?>
                <h1>plusieurs villes</h1>
                <?php foreach($villes as $v) : ?>
                    <p>nom : <?php echo $v["nom"] ?></p>
                    <p>nbHabitant : <?php echo number_format( $v["nbHabitant"],0,";"," ") ?></p>
                    <hr>
                <?php endforeach ?>
                
<!---------------------1 seul villes-------------->
<?php elseif(count($villes) === 1) : ?>
                <h1>un seul villes</h1>
                <p>nom : <?php echo $villes[0]["nom"] ?></p>
                <p>nbHabitant : <?php echo number_format( $villes[0]["nbHabitant"] ,0,";"," ") ?></p>
            
<!---------------------aucun villes ----------------------->
<?php else : ?>
                <h1>aucun villes</h1>
            <?php endif ?>



        </section>
</div>
    
</body>
</html>