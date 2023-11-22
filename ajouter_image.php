<?php
session_start();
if(!array_key_exists("mail",$_SESSION)) {
    header('Location: connection.php');
    exit();
}
$errors = [];
$allwoedExtension =["image/jpeg","image/png"];
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if ($_FILES["photos"]["error"] != 0){
        $errors [] ="inconu";
    }
    if (in_array($_FILES["photos"]["type"],$allwoedExtension)){
        if ($_FILES["photos"]["size"]>2097152){
            $errors [] = "tros grosse";
        }
    }else{
        $errors [] = "Pas bon";
    }

    if (count($errors)== 0) {
        move_uploaded_file($_FILES["photos"]["tmp_name"],"assets/".uniqid().'-'.$_FILES["photos"]["name"]);
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
            foreach ($errors as $error){
                echo("<li>".$error."</li>");
            }
        }
    ?>
</section>

<?php
include 'blocks/footer.php';
include 'blocks/js.php';
?>
</body>
</html>