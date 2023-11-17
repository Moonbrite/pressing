<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include 'blocks/styles.php'
    ?>
    <title>Document</title>
</head>
<body>
<header class="">
    <?php
    include "blocks/variable.php";
    include 'blocks/header.php';
    var_dump($_POST);
    if ($_POST['name'] != '' && $_POST['password'] != '') {
        echo("<h1> Bienvenue " . $_POST['name'] . "!");
    } else {
        echo('Probleme d\'authentification veuillez réessayer');
    }

    ?>
</header>
<h3>Hello toi</h3>

<?php
include 'blocks/footer.php';
include 'blocks/js.php';
?>
</body>
</html>