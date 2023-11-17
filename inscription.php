<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include "blocks/styles.php"
    ?>
    <title>Document</title>
</head>
<body>
<header>
    <?php
    include "blocks/header.php";
    ?>
</header>
<section class="login-container">
    <div class="">
            <h3>Inscription</h3>
        <form action="" method="post">

            <?php
            $errors = [];
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["lastname"])){
                    $errors["lastname"] = "veuillez saisir un identifiant";
                }
                elseif(strlen($_POST["lastname"])< 3){
                    $errors['lastname'] = "pas assez de lettres";
                }
            }
            ?>
            <input class="<?php
            if(array_key_exists("lastname",$errors)){
                echo('is-invalid');
            }
            ?>" type="text" name="lastname" placeholder="Nom" required="required" value="<?php
            if(!empty($_POST['lastname'])){
                echo($_POST['lastname']);
            }
            ?>"/>
            <div class='invalid-feedback'>
                <?php
                if(array_key_exists("lastname",$errors)){
                    echo($errors["lastname"]);
                }
                ?>
            </div>

            <!---------------------------------------------------------------------------->

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["name"])){
                    $errors["name"] = "veuillez saisir un identifiant";
                }
                elseif(strlen($_POST["name"])< 3){
                    $errors['name'] = "pas assez de lettres";
                }
            }
            ?>
            <input class="<?php
            if(array_key_exists("name",$errors)){
                echo('is-invalid');
            }
            ?>" type="text" name="name" placeholder="Prenom" required="required" value="<?php
            if(!empty($_POST['name'])){
                echo($_POST['name']);
            }
            ?>"/>
            <div class='invalid-feedback'>
                <?php
                if(array_key_exists("name",$errors)){
                    echo($errors["name"]);
                }
                ?>
            </div>

            <!---------------------------------------------------------------------------->

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["mail"])){
                    $errors["mail"] = "veuillez saisir un identifiant";
                }
                elseif(strlen($_POST["mail"])< 3){
                    $errors['mail'] = "pas assez de lettres";
                }
            }
            ?>
            <input class="<?php
            if(array_key_exists("mail",$errors)){
                echo('is-invalid');
            }
            ?>" type="email" name="mail" placeholder="Email" required="required" value="<?php
            if(!empty($_POST['mail'])){
                echo($_POST['mail']);
            }
            ?>"/>
            <div class='invalid-feedback'>
                <?php
                if(array_key_exists("mail",$errors)){
                    echo($errors["mail"]);
                }
                if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                    echo 'Ladresse email est considérée comme valide.';
                }else{
                    echo"L'adresse email n'est pas valide.";
                }
                ?>
            </div>

            <!---------------------------------------------------------------------------->

            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["password"])){
                    $errors["password"] = "veuillez saisir un identifiant";
                }
                elseif(strlen($_POST["password"])< 8){
                    $errors['password'] = "pas assez de lettres";
                }
            }
            ?>
            <input class="<?php
            if(array_key_exists("password",$errors)){
                echo('is-invalid');
            }
            ?>" type="password" name="password" placeholder="Mot de passe" required="required" value="<?php
            if(!empty($_POST['password'])){
                echo($_POST['password']);
            }
            ?>"/>
            <div class='invalid-feedback'>
                <?php
                $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";
                if(preg_match($pattern,$_POST['password'])) {
                    if(str_contains($_POST['password'],$_POST['name']) || str_contains($_POST['password'],$_POST['lastname'])){
                        $errors['password'] = "pas bon";
                    }else {
                        $errors['password'] = "bon";
                    }
                }else{
                    $errors['password'] = "pas bon";
                }
                if(array_key_exists("password",$errors)){
                    echo($errors["password"]);
                }
                ?>
            </div>
            <!---------------------------------------------------------------------------->
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["confirm_password"])){
                    $errors["confirm_password"] = "veuillez saisir un identifiant";
                }
                elseif(strlen($_POST["confirm_password"])< 8){
                    $errors['confirm_password'] = "pas assez de lettres";
                }
            }
            ?>
            <input class="<?php
            if(array_key_exists("confirm_password",$errors)){
                echo('is-invalid');
            }
            ?>" type="password" name="confirm_password" placeholder="Confirmer votre mot de passe" required="required" value="<?php
            if(!empty($_POST['confirm_password'])){
                echo($_POST['confirm_password']);
            }
            ?>"/>
            <div class='invalid-feedback'>
                <?php
                if(array_key_exists("confirm_password",$errors)){
                    echo($errors["confirm_password"]);
                }
                if($_POST['password'] != $_POST['confirm_password'] ){
                        echo("pas bon");
                }else{
                    echo("bon");
                }
                var_dump($errors);
                ?>
            </div>
            <!---------------------------------------------------------------------------->
            <button type="submit">Crée votre compte</button>

        </form>
    </div>
</section>
<?php
include "blocks/js.php";
?>
</body>
</html>
