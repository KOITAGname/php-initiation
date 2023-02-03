<?php 
require "09-bdd.php" ;
//est ce que la page php est appelée avec une partie variable 
if( !empty($_GET) &&       // est ce que j'ai une partie variable dans l'url
    isset($_GET["nom"])){  // est la partie variable contient nom=
 
    $nom = $_GET["nom"] ; // récupérer la valeur après le = dans l'url
    
    $villesFiltre = [] ;
    foreach($villes as $v){
        if($v["nom"] === $nom){
            //array_push($villesFiltre , $v);
            $villesFiltre[] =  $v; // autre manière d'ajouter un élément à un tableau
        }
    }
    $villes = $villesFiltre ; 
}
// https://materializecss.com/
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
                <!-- ul>li*3>a   -->
                <ul>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php">Accueil</a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=Paris">Paris</a></li>
                    <li><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=Bordeaux">ville inconnue</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- -->
    <div class="container">
        <div class="row">
            <!-- 
                3 cas à gérer 
                afficher plusieurs villes
                afficher une seule ville
                aucune ville
            -->
<?php if(count($villes) > 1) : ?>
    <h1>Plusieurs villes</h1>
        <?php foreach($villes as $v) : ?>
            <div class="col s3">
            <p>nom ville : <?php echo $v["nom"] ?></p>
                <p>nombre d'habitants : <?php echo number_format($v["nbHabitant"] , 0 , "," , " " ) ?>
                        </p>
<p><a href="http://localhost/php-initiation/jour4/09-exo.php?nom=<?php echo $v["nom"] ?>" class="waves-effect waves-light btn">voir la ville</a>
                        </p>
                    </div>
                <?php endforeach ?>
            <?php elseif(count($villes) === 1) : ?>
                <h1>Une ville : <?php echo $villes[0]["nom"] ?></h1>
                <p>nombre d'habitants : <?php echo number_format($villes[0]["nbHabitant"] , 0 , "," , " " ) ?></p>
            <?php else : ?>
                <h1 class="white-text orange darken-5">Erreur 404 <small>aucune ville trouvée en base de données</small></h1>
            <?php endif ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>