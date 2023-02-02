<?php
require "03-variable.php";
require "03-fonction.php";

//utilisation  de array_push avec foreach
if(!empty($_GET)){

    $id = $_GET["id"];
    $resultat = [];
    foreach($articles as $a){
        if($a["id"]===$id){
            array_push($resultat,$a);
        }
    }
    $articles=$resultat;
}

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
    <div class="container">
        <section class="row mt-5">
        <!----------------- 1 seul article ---------------------->
            <?php if(count($articles)== 1): ?>
                <article class='col-12'>
                    <h1> Page single </h1>
                    <h2><?php echo $articles[0]["titre"] ?></h2>
                    <img src='<?php echo $articles[0]["img"] ?>' alt='' >
                    <p><?php echo $articles[0]["contenu"] ?></p>
                    <a href="http://localhost/php-initiation/jour4/03-index.php">retour à la page d'accueil</a>
                </article>

        <!--------------------- page d'accueil ------------------->
        <?php elseif( count($articles) > 1 ) : ?>
        <h1 > Page d'accueil </h1>
            <?php foreach($articles as $a) : ?>
                <div class="col-3 mb-3">
                    <?php echo genererArticle($a) ?>
                </div>
            <?php endforeach?>
             <!-------------- page d'erreur -------------------->
            <?php else : ?>
                <h1>Page erreur 404</h1>
                <p>Erreur 404 l'article demandé n'existe pas ...</p>
            <?php endif ?>
        </section>
    </div>
</body>
</html>
<!-- http://localhost/php-initiation/jour4/03-index.php -->