<?php 
require "09-data-variable.php";
//var_dump($villes);

//http://localhost/php-initiation/jour4/09-exo.php

if(!empty($_GET) &&
 isset($_GET["nom"])){////nous permet de verifier si les deux conditions sont vraie pour executer la boucle
    //sinon il affiche toutes les villes
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
</head>
<body>
    <header>
        <nav class="container">
        <div>
                <ul>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php">Accueil</a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=Paris">Paris</a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=Grenoble">ville inconnue</a></li>
                </ul>
            </div>
        </nav>
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
                    <div class="col s3">
                    <p>nom : <?php echo $v["nom"] ?></p>
                    <p>nbHabitant : <?php echo number_format( $v["nbHabitant"],0,",","_") ?></p>
<p><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=<?php echo $v["nom"] ?>" class="waves-effect waves-light btn">voir la ville</a>
                        </p>
                    
                </div>
                <?php endforeach ?>
                
<!---------------------1 seul villes-------------->
<?php elseif(count($villes) === 1) : ?>
                <h1>une seul villes</h1>
                <p>nom : <?php echo $villes[0]["nom"] ?></p>
                <p>nbHabitant : <?php echo number_format( $villes[0]["nbHabitant"] ,0,";","_") ?></p>
            
<!---------------------aucun villes ----------------------->
<?php else : ?>
    <h1 class="white-text orange darken-5">Erreur 404 <small>aucune ville trouvée en base de données</small></h1>
            <?php endif ?>



        </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>