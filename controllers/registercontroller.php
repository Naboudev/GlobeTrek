<?php

if (isset($_POST["inscrire"])) {
    extract($_POST);


    if ($mdp == $mdp_confirm) {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT, ["cost" => 12]);
        if (inscrire($prenom, $nom, $adresse, $tel, $email, $mdp, "client")) {
            setmessage("Creation de compte avec succes");   
            return header("Location:?page=connexion");
        }
    }else{
        setmessage ("Les deux mots de passe ne sont pas identiques", "danger");
    }
}
require_once("views/includes/entete.php");
require_once("views/register.php");