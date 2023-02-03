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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
         <!-- http://localhost/php-initiation/jour5/02-exo.php -->

         <h1>Formulaire Newsletter</h1>
        <form action="02-traitement.php" method="POST">
    
            <div class="input-field">
<input type="email" name="email" id="email" 
value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : "" ?>">
                <label for="email">votre email</label>
            </div>
            <div class="input-field">
            
            <select name="menu" id="menu" >
            <option value="" disabled selected>Choisir la langue</option>
        <option value="francais" <?php echo !empty($_SESSION["form"]["menu"]) && $_SESSION["form"]["menu"] === "francais"? "selected" : "" ?>>francais</option>
        <option value="anglais" <?php echo !empty($_SESSION["form"]["menu"]) && $_SESSION["form"]["menu"] === "anglais"? "selected" : "" ?>>anglais</option>
        <option value="arabe" <?php echo !empty($_SESSION["form"]["menu"]) && $_SESSION["form"]["menu"] === "arabe"? "selected" : "" ?>>arabe</option>
            </select>
            <label for="menu">choisir la langue de la newletter</label>
            </div>
            <div>
                <input type="submit" class="btn green darken-2">
            </div>
        </form>
        <!-- //est ce que j'ai bien un tableau $_SESSION["message"] qui contient un cle qui s'appelle message qui est lui meme un tableau {EXISTE}  -->

         <!-- //on verifier si le champ message existe -->
         <?php if(!empty($_SESSION["message"])) : ?>
            <?php if($_SESSION["message"]["alert"] === "success") : ?> 
                <p class="white-text green" 
                   style="padding:5px 10px">
                   <?php echo $_SESSION["message"]["info"]  ?>
                </p>
            <?php elseif($_SESSION["message"]["alert"] === "danger") : ?> 
                <p class="white-text pink darken-1" 
                   style="padding:5px 10px">
                   <?php foreach($_SESSION["message"]["info"] as $info) : ?>
                     <?php echo $info  ?><br>
                   <?php endforeach ?>
                </p>
            <?php endif ?>
        <?php endif ?>



    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- on doit ajouter la partie js pour le  -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems)})
    </script>
 
</body>
</html>

<?php var_dump( $_SESSION) ?>