<?php
require "09-variable.php";
require "09-fonction.php";
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
        <section class="row">
            <?php foreach($articles as $a) : ?>
                <div class="col-3 mb-3">
                    <?php echo genererArticle($a) ?>
                </div>
            <?php endforeach ?>
        </section>
    </div>
</body>
</html>
<!-- http://localhost/php-initiation/jour3/09-index.php -->