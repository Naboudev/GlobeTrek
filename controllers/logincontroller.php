<?php

if (isset($_POST["connecter"])) {
    extract($_POST);
    $user = seconnecter($email);
    if ($user) {
        if (password_verify($mdp, $user->mdp)) {
            $_SESSION["user"] = $user;

            if ($user->role == "admin") {
                return header("Location:?page=reservationAdmin");
            }else{
                return header("Location:?page=home");
            }
        }else{
            setmessage ("Mot de passe incorrecte", "warning");
        }
    }else{
        setmessage ("Email incorrecte", "warning");
    }
}
require_once("views/includes/entete.php");
require_once("views/login.php");