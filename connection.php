<?php
 session_start();
 $error =null;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST["mail"] == "test@test.fr" && $_POST ["password"] == "eUDHdjs3") {
        $_SESSION["mail"] = "test@test.fr";
        header("Location: home.php");
    }else{
        $error = "Le mail ou le mot de passe ne corsponde pas";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(array_key_exists("mail",$_SESSION)) {
        if ($_SESSION["email"]) {
            header('Location: home.php');
            exit();
        }
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
    include "blocks/styles.php";
    ?>
    <title>Document</title>
</head>
<body>
<header class="">
    <?php
    include 'blocks/header.php';
    ?>
</header>
    <section class="login-container">
        <div>
            <header>
                <h2>Identification</h2>
            </header>
            <form class="" action="" method="post">
                <input class="form-control " type="email" name="mail" placeholder="Email" required="required" value="<?php
                if(!empty($_POST['mail'])){
                    echo($_POST['mail']);
                }
                ?>"/>

                <input class="form-control" type="password" name="password" placeholder="Mot de passe" required="required" value="<?php
                if(!empty($_POST['password'])){
                    echo($_POST['password']);
                }
                ?>"/>
                <button type="submit">Connexion</button>
                <div>
                    <?php
                    if(!is_null($error)) {
                        echo ('<div class="text-danger">'.$error.'</div>');
                    }
                    ?>
                </div>
                <a href="inscription.php">S'inscrire</a>
            </form >
        </div>
    </section>
<?php
include "blocks/js.php";
?>
</body>
</html>
