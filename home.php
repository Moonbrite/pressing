<?php
session_start();
if(!array_key_exists("mail",$_SESSION)) {
    header('Location: connection.php');
    exit();
}
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
<body class="<?php
include "blocks/theme-dark.php"
?>">
<header>
    <?php
    include "blocks/header.php";
    ?>
</header>

<h3>Mes photos</h3>

<?php
$dir = 'assets/';
$files1 = scandir($dir);
for($i =0;$i < count($files1);$i++) {
    if($files1[$i] != "." && $files1[$i] != ".."){
        echo ('<img src="'.$dir.$files1[$i].'" alt="">');
    }
}
?>


<?php
include "blocks/footer.php";
include "blocks/js.php";
?>
</body>
</html>
