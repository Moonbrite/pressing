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
    include "blocks/variable.php";
    include 'blocks/header.php';
    ?>
</header>
<h3>Hello toi</h3>
<img style="width:800px" src="assets/giphy.gif" alt="">
<?php
include 'blocks/footer.php';
include 'blocks/js.php';
?>
</body>
</html>