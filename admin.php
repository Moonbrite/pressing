<?php
session_start();
?>
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
    include 'blocks/header.php';
    ?>
</header>
<h1 class="">Bonjour <?php
    include "blocks/variable.php";
    echo($fullName);
    
    ?>
</h1>
<?php
include 'blocks/footer.php';
include 'blocks/js.php';
?>
</body>
</html>