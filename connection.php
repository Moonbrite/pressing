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
            <form action="index.php" method="post">
                <input type="text" name="username" placeholder="Nom d'utilisateur" required="required"/>
                <input type="password" name="password" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>
                <a href="../pressing/inscription.php">S'inscrire</a>
            </form>
        </div>
    </section>
<?php
include "blocks/js.php";
?>
</body>
</html>
