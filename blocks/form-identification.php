<?php
$errors = [];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["mail"])){
        $errors["mail"] = "Veuillez saisir un identifiant";
    }
    elseif(strlen($_POST["mail"])< 3){
        $errors['mail'] = "Pas assez de lettres";
    }
    elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = "L'adresse email n'est pas valide..";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["password"])){
        $errors["password"] = "Veuillez saisir un identifiant";
    }

    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

    $password = $_POST['password'];

    if(!preg_match($pattern,$password)) {
        $errors['password'] = "Le mot de passe doit contenir 1 majuscule 1 minuscle et 1 chiffre et 8 caractére mini";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if (count($errors) == 0) {
        header('Location: home.php');
        exit();
    }
}