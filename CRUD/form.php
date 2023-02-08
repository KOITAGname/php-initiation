<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- http://localhost/php-initiation/CRUD/form.php -->
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Liste des Articles</h1>
        <form action="traitement.php" method="POST">
            <div class="mb-3">
                <label for="titre">titre</label>
                <input type="text" name="titre" id="titre" class="form-control" required value="<?php echo !empty($_SESSION["form"]["titre"]) ? $_SESSION["form"]["titre"] : '' ?>">
                
            </div>
            <div class="mb-3" >
                <label for="contenu">le Contenu</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control" placeholder="saisir votre commentaire" required><?php echo !empty($_SESSION["form"]["contenu"]) ? $_SESSION["form"]["contenu"] : '' ?></textarea>
            </div>
            <div class="mb-3">
                <label for="auteur">auteur</label>
                <input type="text" name="auteur" id="auteur" class="form-control" required
                value="<?php echo !empty($_SESSION["form"]["auteur"]) ? $_SESSION["form"]["auteur"] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="dt_creation">date création</label>
                <input type="date" name="dt_creation" id="dt_creation" class="form-control" placeholder="saisir la date" required
                value="<?php echo !empty($_SESSION["form"]["dt_creation"]) ? $_SESSION["form"]["dt_creation"] : '' ?>">
               
            </div>
            <div class="mb-3">
        <input type="submit" class="btn btn-outline-primary btn-sm">
    </div>
        </form>

        <?php if(!empty($_SESSION["message"])) : ?>
            <?php if($_SESSION["message"]["alert"] === "success") : ?> 
                <p class="alert alert-success" 
                   style="padding:5px 10px">
                   <?php echo $_SESSION["message"]["info"]  ?>
                </p>
            <?php elseif($_SESSION["message"]["alert"] === "danger") : ?> 
                <p class="alert alert-danger" 
                   style="padding:5px 10px">
                   <?php foreach($_SESSION["message"]["info"] as $i) : ?>
                     <?php echo $i  ?><br>
                   <?php endforeach ?>
                </p>
            <?php endif ?>
        <?php endif ?>
    
    </div>

    
</body>
</html>