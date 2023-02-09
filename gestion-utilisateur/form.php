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
<!-- http://localhost/php-initiation/gestion-utilisateur/form.php -->
</head>
<body>
<div class="container ">
    <h1 class="mt-5">Gestion des Utilisateur</h1>
<form action="traitement.php" method="POST">

    <!-- nom input de type text -->
        <div class="mb-3">
            <label for="nom">Votre nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required value="<?php echo !empty($_SESSION["form"]["nom"]) ? $_SESSION["form"]["nom"] : '' ?>" >
        </div>

    <!-- email input de type email -->
        <div class="mb-3">
            <label for="email">saisir votre email</label>
            <input type="text" name="email" id="email" class="form-control" required value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : '' ?>">

        </div>

    <!--password input de type  password -->
        <div class="mb-3 zone-password">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" required value="<?php echo !empty($_SESSION["form"]["password"]) ? $_SESSION["form"]["password"] : '' ?>">
            <button class="show-password">show</button>

        </div>
    <!-- menu deroulant role => redacteur / admin / user -->       
<div class="mb-3">
    <label for="menu">Votre menu</label>
    <select name="menu" id="menu" class="form-control">
        <option value="">Veuillez choisir un menu</option>
        <option value="user" <?php echo !empty($_SESSION["form"]["menu"]) && $_SESSION["form"]["menu"] === "user" ? 'selected' : '' ?>>user</option>
        <option value="redacteur" <?php echo !empty($_SESSION["form"]["menu"]) && $_SESSION["form"]["menu"] === "redacteur" ? 'selected' : '' ?>>redacteur</option>
        <option value="admin"  <?php echo !empty($_SESSION["form"]["menu"]) && $_SESSION["form"]["menu"] === "admin" ? 'selected' : '' ?>>admin</option>
    </select>
    

</div>

    <!-- date  input de type date -->
        <div class="mb-3">
            <label for="date">Date de creation</label>
            <input type="date" name="date" id="date" class="form-control" required value="<?php echo !empty($_SESSION["form"]["date"]) ? $_SESSION["form"]["date"] : '' ?>" >

        </div>
      
        <!-- case a cocher  -->

        <div class="mb-3">
        <label for="case">
            <input type="checkbox" id="case" name="case"   required <?php echo !empty($_SESSION["form"]["case"]) && $_SESSION["form"]["case"] === "1" ? 'checked' : '' ?> >
            Utilisateur actif</label>
        </div>
        
        <!-- soumettre la formulaire-->
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
                <p class="bg-danger" 
                   style="padding:5px 10px">
                   <?php foreach($_SESSION["message"]["info"] as $i) : ?>
                     <?php echo $i  ?><br>
                   <?php endforeach ?>
                </p>
            <?php endif ?>
        <?php endif ?>

</div>
<script>
        // préremplir le champ date de création à aujourd'hui 
        // const dt = new Date(); // récupérer la date du jour et stocker dans la variable dt 
        // const annee = dt.getFullYear(); // extraire l'année de dt
        // const mois = ("0" + (dt.getMonth() + 1) ).slice(-2); // extraire le mois de dt + 1 
        //     // dt.getMonth() => decembre => 11
        //     // dt.getMonth() + 1 => janvier => 12
        //     // "0" + dt.getMonth() + 1 => janvier => 012
        //     // ("0" + dt.getMonth() + 1 ).slice(-2) => 12
                                
        // const jour = ("0" + dt.getDate()).slice(-2); // extraite le jour de dt

        // if(document.querySelector("#date").value === ""){
        //     document.querySelector("#date").value = `${annee}-${mois}-${jour}`;
        // }
//////////////////////////////////////une autre maniere de faire (date du jour)///////////////////////////////////
       if(document.querySelector("#date").value === ""){
       document.querySelector("#date").valueAsDate = new Date();

            // php date()
            // js new Date() Date.now()
            // SQL NOW()
         }


        // lorsque l'on clique sur le bouton show => changer le type du champ password => text
        // lorsque je reclique que le bouton show => changer le type du champ text => password 
        document.querySelector(".show-password").addEventListener("click", function(e){
            e.preventDefault();
            const type = document.querySelector("#password").type ;
            if(type === "password"){
                document.querySelector("#password").type = "text"
                e.target.innerText = "hide"
            }else {
                document.querySelector("#password").type = "password"
                e.target.innerText = "show"
            }
        })

    </script>

</body>
</html>