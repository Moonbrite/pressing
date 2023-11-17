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
    <title>Document</title>
    <?php
    include "blocks/styles.php";
    ?>
</head>
<body>
<header>
    <?php
    include "blocks/header.php";
    ?>
</header>

<h3>Hello toi</h3>



<?php
include "blocks/footer.php";
include "blocks/js.php";
var_dump($_SESSION);
?>
</body>
</html>
