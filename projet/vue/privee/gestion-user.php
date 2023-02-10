<?php
$sth = $connexion->prepare("
    SELECT id, nom, email, DATE_FORMAT(dt_creation , '%d/%m/%Y') AS `dt_creation` , 
    (CASE status WHEN  1  THEN 'actif' ELSE 'inactif' END) AS `status`
    FROM users
");

//nous permet de recuperer les profils dans la base de donnees
$sth->execute();
$resultat = $sth->fetchAll();
?>

<h1>Gestion des utilisateurs</h1>
<section class="row">
    <div class="col-3">
    <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col">
        <div class="text-end mb-3">
        <a href="http://localhost/php-initiation/projet/index.php?page=user&partie=privee&action=add" class="btn btn-primary">ajouter un nouveau profil</a> 
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>email</th>
                    <th>date création</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
            </thead>
            <!-- <tbody>
                <tr>
                    <td>1</td>
                    <td>Alain</td>
                    <td>alain@yahoo.fr</td>
                    <td>10/02/2023</td>
                    <td>actif</td>
                    <td>
                        <a href="" class="btn btn-warning me-2"> modifier</a>
                        <a href="" class="btn btn-danger"> supprimer</a>
                    </td>
                </tr>
            </tbody> -->


            <?php foreach($resultat as $user) : ?>
                <!-- <tr>
                    <td>1</td>
                    <td>Alain</td>
                    <td>alain@yahoo.fr</td>
                    <td>10/02/2023</td>
                    <td>actif</td> -->
                    <!-- htmlentities() fonction de sécurité pour éviter les injections de code -->
                    <td><?php echo htmlentities($user["id"]) ?></td>
                    <td><?php echo htmlentities($user["nom"]) ?></td>
                    <td><?php echo htmlentities($user["email"]) ?></td>
                    <td><?php echo htmlentities($user["dt_creation"]) ?></td>
                    <td><?php echo htmlentities($user["status"]) ?></td>
                    <td>
<!-- le php dans le lien cliquable nous permet de modifier un profil utlisateur -->
<a href="<?php echo WWW ?>?page=user&partie=privee&action=update&id=<?php echo htmlentities($user["id"]) ?>" class="btn btn-warning me-2" > modifier</a>

<!-- le php dans le lien cliquable nous permet de suppimmer un profil utlisateur -->
<a href="<?php echo "http://localhost/php-initiation/projet/index.php"?>?page=user&partie=privee&action=delete&id=<?php echo htmlentities($user["id"]) ?> class="btn btn-danger" onclick="return confirm('etes vous sur de vouloir supprimer ce profil')"> supprimer</a>
                    </td>
                </tr>
                <?php endforeach ?>



        </table>
    </div>

    </table>
</section>