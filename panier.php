<?php
session_start();
if(!array_key_exists("mail",$_SESSION)) {
    header('Location: index.php');
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
    <?php
    include "blocks/styles.php";
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
<h3 class="text-center">Ici le panier !!!</h3>
<div class="container">
    <div class="row justify-content-center">
        <?php

        $sliders = [
                [
                "src" => "https://i.pinimg.com/originals/c3/56/a7/c356a7da0a0110076ec31ababd740350.jpg",
                "h5" => "Pikachu",
                "desc" => "Pikachu, le Pokémon emblématique, est une petite créature jaune au pelage doux et électrique. Ses grands yeux ronds pétillent d'énergie, reflétant la malice et l'intelligence qui se cachent derrière sa mignonne apparence.",
                "type" => "foudre",
                "prix" => 22,
                "attack" => ["Éclair ", "Queue de Fer", "Vibrobscur "],
                ],
                [
                    "src" => "data:image/jpeg;base64,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",
                    "h5" => "Salamèche ",
                    "desc" => "Salamèche, un Pokémon de type feu, incarne la grâce et la puissance dans sa stature élancée. Sa flamme ardente sur la pointe de sa queue vacille comme une lueur éternelle. Les yeux de Salamèche brillent d'une intelligence vive, révélant une détermination farouche. ",
                    "type" => "feu",
                    "prix" => 44,
                    "attack" => ["Flammeche ", "Crocs Feu"],
                ],
                [
                    "src" => "data:image/jpeg;base64,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",
                    "h5" => "Magicarpe",
                    "desc" => "Magicarpe, le Pokémon aquatique, est un poisson d'apparence humble mais porteur d'une promesse épique. Sa couleur chatoyante et ses écailles scintillantes témoignent de sa beauté sous-estimée. Malgré son apparence maladroite, Magicarpe cache un potentiel extraordinaire d'évolution.",
                    "type" => "eau",
                    "prix" => 25,
                    "attack" => ["Trenaillement ", "Soin Miroir ", "Cascade"],
                ],
        ];
        $somme = 0;
        foreach ($sliders as $slider) {
            $color="";
            if ($slider["type"] =="feu") {
                $color="feu";
            }elseif ($slider["type"] =="eau"){
                $color = "eau";
            }elseif ($slider["type"] =="foudre"){
                $color ="elec";
            }
            echo('<div class="col-lg-4 text-center d-flex justify-content-center carte"><div class="card mt-2 " style="width: 18rem;">
        <img src="'.$slider["src"].'" class="card-img-top '.$color.'" alt="">
        <div class="card-body te '.$color.' ">
            <h5 class="card-title">'.$slider["h5"].'</h5>
            <p class="card-text text-start">'.$slider["desc"].'</p>
            <a href="#" class="btn btn-primary">'.$slider["prix"].'$</a>
            <a class="btn btn-danger sup" id="sup">Suprimer</a>
            <ul>
        ');
            foreach ($slider["attack"] as $slide){
                echo ('<li class="card-text text-start">'.$slide.'</li>');
            }
            echo ("</div></div></ul></div>");
            $somme += array_sum($slider);
        }
        echo ("<h2 class='text-center mt-4'>Total de : ".$somme." $</h2>");
        ?>
    </div>
</div>

<?php
include "blocks/footer.php";
include "blocks/js.php"
?>
</body>
</html>