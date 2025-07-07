<?php

if (isset($_POST["connecter"])) {
    extract($_POST);
    $user = seconnecter($email);
    if ($user) {
        if (password_verify($mdp, $user->mdp)) {
            $_SESSION["user"] = $user;

            if ($user->role == "admin") {
                return header("Location:?page=employeAdmin");
            }else{
                return header("Location:?page=profil");
            }
            supprimerLesDonneesDeLInput();
        }else{
            setmessage ("Mot de passe incorrecte", "warning");
            enregistrerLesDonneesDeLInput();
        }
    }else{
        setmessage ("Email incorrecte", "warning");
        enregistrerLesDonneesDeLInput();
    }
}
require_once("views/includes/entete.php");
require_once("views/login.php");