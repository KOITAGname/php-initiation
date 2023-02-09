<h1 class="text-center">Connexion</h1>
<form action="lib/traitement-login.php" method="POST" class="row">
    <div class="col-3 offset-3">

        <input type="text" name="" id="" placeholder="votre login" class="form-control" name="login">
    </div>

    <div class="col-3 ">
        <input type="text" placeholder="votre mot de passe" class="form-control">
    </div>

    <div class="col-12 d-flex justify-content-center mt-4">
        <input type="submit" name="" id="" class="btn btn-primary">
    </div>

</form>

<?php if(!empty($_SESSION["message"])) : ?>
    <?php if($_SESSION["message"]["alert"] === "success") : ?> 
        <p class="alert alert-success" >
            <?php echo $_SESSION["message"]["info"]  ?>
        </p>
    <?php elseif($_SESSION["message"]["alert"] === "danger") : ?> 
        <p class="alert alert-danger">
            <?php foreach($_SESSION["message"]["info"] as $i) : ?>
                <?php echo $i  ?><br>
            <?php endforeach ?>
        </p>
    <?php endif ?>
<?php endif ?>
