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
        <h4>Inscription</h4>
        <?php
        include 'blocks/form-insc.php';
        ?>
        <form action="" method="post">
            <input class="form-control <?php
            if(array_key_exists("lastname",$errors)){
                echo('is-invalid');
            }elseif(!empty($_POST['lastname'])) {
                echo ('is-valid');
            }
            ?>" type="text" name="lastname" placeholder="Nom" required="required" value="<?php
            if(!empty($_POST['lastname'])){
                echo($_POST['lastname']);
            }
            ?>"/>
            <div class='invalid-feedback msg'>
                <?php
                if(array_key_exists("lastname",$errors)){
                    echo($errors["lastname"]);
                }
                ?>
            </div>

            <!---------------------------------------------------------------------------->

            <input class="form-control <?php
            if(array_key_exists("name",$errors)){
                echo('is-invalid');
            }elseif(!empty($_POST['name'])) {
                echo ('is-valid');
            }
            ?>" type="text" name="name" placeholder="Prenom" required="required" value="<?php
            if(!empty($_POST['name'])){
                echo($_POST['name']);
            }
            ?>"/>
            <div class='invalid-feedback msg'>
                <?php
                if(array_key_exists("name",$errors)){
                    echo($errors["name"]);
                }
                ?>
            </div>

            <!---------------------------------------------------------------------------->

            <input class="form-control <?php
            if(array_key_exists("mail",$errors)){
                echo('is-invalid');
            }elseif(!empty($_POST['mail'])) {
                echo ('is-valid');
            }
            ?>" type="email" name="mail" placeholder="Email" required="required" value="<?php
            if(!empty($_POST['mail'])){
                echo($_POST['mail']);
            }
            ?>"/>
            <div class='invalid-feedback msg'>
                <?php
                if(array_key_exists("mail",$errors)){
                    echo($errors["mail"]);
                }
                ?>
            </div>

            <!---------------------------------------------------------------------------->
            <input class="form-control <?php
            if(array_key_exists("password",$errors)){
                echo('is-invalid');
            }elseif(!empty($_POST['password'])) { //
                echo ('is-valid');
            }
            ?>" type="password" name="password" placeholder="Mot de passe" required="required" value="<?php
            if(!empty($_POST['password'])){
                echo($_POST['password']);
            }
            ?>"/>
            <div class='invalid-feedback msg'>
                <?php
                if(array_key_exists("password",$errors)){
                    echo($errors["password"]);
                }
                ?>
            </div>
            <!---------------------------------------------------------------------------->
            <input class="form-control <?php
            if(array_key_exists("confirm_password",$errors)){
                echo('is-invalid');
            }elseif(!empty($_POST['confirm_password'])) {
                echo ('is-valid');
            }
            ?>" type="password" name="confirm_password" placeholder="Confirmer votre mot de passe" required="required" value="<?php
            if(!empty($_POST['confirm_password'])){
                echo($_POST['confirm_password']);
            }
            ?>"/>
            <div class='invalid-feedback msg'>
                <?php
                if(array_key_exists("confirm_password",$errors)){
                    echo($errors["confirm_password"]);
                }
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