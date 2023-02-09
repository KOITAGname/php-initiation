<?php 
session_start(); // étant donné formulaire + authentification => prépare le terrain
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
    <header class="bg-success">
        <nav class="navbar navbar-expand navbar-dark container">
            <span class="navbar-brand">Blog</span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=presentation" class="nav-link">Présentation</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php?page=login" class="nav-link">Login</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php?=acceuil&partie=privee" class="nav-link">tableau de bord</a>
                </li>
            </ul>
        </nav>
    </header>    
    <!-- http://localhost/php-initiation/projet/index.php  -->
<!-- on va gerer tous ce qui est front-office -->
    <div class="container">
        <!-- -------------- la partie public---------------- -->
        <?php if (empty($_GET)) :?>
            <?php require "vue/public/accueil.php" ?>
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "presentation") : ?>
            <?php require "vue/public/presentation.php" ?>
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "login") : ?>
            <?php require "vue/public/login.php" ?> 
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "mention") : ?>
            <?php require "vue/public/mention-legale.php" ?>

<!--    ---------------la partie privee -----------------   -->
<!--------------------------tableau-bord-------------------------->
<?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) &&
             $_GET["page"] === "accueil" && $_GET["partie"] === "privee"): ?>
            <?php require "vue/privee/tableau-bord.php" ?>
            <!-- index.php?page=page&partie=privee? -->
 <!-- --------------------gestion_user  --------------------------- -->

<?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) &&
             $_GET["page"] === "user" && $_GET["partie"] === "privee"): ?>
            <?php require "vue/privee/gestion-user.php" ?>

<!-------------------------gestion_page  ---------------------------->

            <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) &&
             $_GET["page"] === "page" && $_GET["partie"] === "privee"): ?>
            <?php require "vue/privee/gestion-page.php" ?>

<!---------------------------- fin partie privee -------------------------- -->

<!---------------------------- else  -------------------------- -->
        <?php else : ?>
                <?php require "vue/public/404.php" ?>
        <?php endif ?>    


    </div>

</body>
</html>