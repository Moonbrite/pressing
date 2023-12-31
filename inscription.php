<?php
session_start();
?>
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
<body class="<?php
include "blocks/theme-dark.php"
?>">
<header>
    <?php
    include "blocks/header.php";
    ?>
</header>
<section class="login-container">
    <div class="">
        <h4 class="text-dark">Inscription</h4>
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
            <input id="pswd" class="form-control <?php
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
            <svg id="eye" class="d-none oeil-i" width="30" height="30" fill="#000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5ZM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5Zm-3-5c0-1.66 1.34-3 3-3s3 1.34 3 3-1.34 3-3 3-3-1.34-3-3Z" clip-rule="evenodd"></path>
            </svg>
            <svg id="eyeClose" class="oeil-i"   width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"></path>
                <path d="M14.12 14.12a3 3 0 1 1-4.24-4.24"></path>
                <path d="m1 1 22 22"></path>
                <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"></path>
            </svg>
            <!---------------------------------------------------------------------------->
            <input id="pswd-confirm" class="form-control <?php
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
            <svg id="eye1" class="d-none oeil-d" width="30" height="30" fill="#000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5ZM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5Zm-3-5c0-1.66 1.34-3 3-3s3 1.34 3 3-1.34 3-3 3-3-1.34-3-3Z" clip-rule="evenodd"></path>
            </svg>
            <svg id="eyeClose1" class="oeil-d"   width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"></path>
                <path d="M14.12 14.12a3 3 0 1 1-4.24-4.24"></path>
                <path d="m1 1 22 22"></path>
                <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"></path>
            </svg>
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