<?php
session_start();
if(!array_key_exists("mail",$_SESSION)) {
    header('Location: connection.php');
    exit();
}
$errors = [];
$allwoedExtension =["image/jpeg","image/png"];
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if ($_FILES["photos"]["error"] != 0 and $_FILES["photos"]["error"] != 4){
        $errors [] = "Erreur inconnue";
    }
    if (in_array($_FILES["photos"]["type"],$allwoedExtension)){
        if ($_FILES["photos"]["error"] == 4){
            $errors [] = "Ta rien mis bouffon";
        }elseif ($_FILES["photos"]["size"]>2097152){
            $errors [] = "Fichier tros volumineux";
        }
    }else{
        $errors [] = "Extension non autorisé";
    }
    if (count($errors) == 0) {

        header('Location: home.php');
}
}

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
<body class="<?php
include "blocks/theme-dark.php"
?>
">
<header class="">
    <?php
    include "blocks/variable.php";
    include 'blocks/header.php';
    ?>
</header>
<section class="container justify-content-center">
    <h3>Mes ta photos</h3>
    <form class="w-50" method="post" enctype="multipart/form-data" action="">
        <input type="file" class="form-control" name="photos">
        <input type="submit" class="btn btn-success">
    </form>
    <?php
        if(count($errors) != 0){
            ?>
        <ul>
            <?php
            foreach ($errors as $error){
                echo("<li>".$error."</li>");
            }
            ?>
    </ul>
    <?php
        }
    ?>
</section>

<?php
include 'blocks/footer.php';
include 'blocks/js.php';
?>
</body>
</html>