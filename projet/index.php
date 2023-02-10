<?php 
session_start(); // étant donné formulaire + authentification => prépare le terrain

// le nom de domaine de ton projet 
define("WWW","http://localhost/php-initiation/projet/index.php");

// appeler la base de données 
require "lib/base-de-donne.php";
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
                    <a href="index.php?page=accueil&partie=privee" class="nav-link">Tableau de bord</a>
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
        <?php elseif( !empty($_GET["page"]) && 
                      !empty($_GET["partie"]) &&
                      $_GET["page"] === "accueil" && 
                      $_GET["partie"] === "privee"): ?>
                <?php require "vue/privee/tableau-bord.php" ?>

                <!-- index.php?page=page&partie=privee ? -->
                <!-- --------------------gestion_user  --------------------------- -->

        <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) &&
             $_GET["page"] === "user" && $_GET["partie"] === "privee"): ?>

            <!------- //pour creer un profil utilisateur  pour le ADD -------->
            <?php if(!empty($_GET["action"]) && $_GET["action"] == "add" ) : ?>
            <!-- nous  permet d'afficher la page ajout d'un nouveau profil -->
                <?php require "vue/privee/gestion-user-form.php" ?>

<!------------- //pour supprime un profil utilisateur  pour le DELETE----------------->
            <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "delete" ) : ?>
<!---------------- nous permet de supprime un profil utilisateur ---------------->
                <?php 
                    $sth = $connexion->prepare("
                        DELETE FROM users WHERE id = :id
                    ");
                    $sth->execute(["id" => $_GET["id"]]);
                    header("Location: http://localhost/php-initiation/projet/index.php?page=user&partie=privee");
                    exit ; 
                ?>

<!------------- //pour mettre a jour  un profil utilisateur  pour le  update------------>
                <?php elseif(!empty($_GET["action"]) && $_GET["action"] ==  "update" ) : ?>
<!--------- nous permet de faire la mise a jour (modifier) des profil utilisateur  ----------------->
                    <?php 
                    $sth = $connexion->prepare("
                        SELECT * FROM users WHERE id = :id
                    ");
                    $sth->execute(["id" => $_GET["id"]]);
                    $user = $sth->fetch();
                    //pour teste 
                    //var_dump($user);
                ?>
                <?php require "vue/privee/gestion-user-form.php" ?>



                <?php else : ?>
                        <?php require "vue/privee/gestion-user.php" ?>
                <?php endif ?> 
          


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