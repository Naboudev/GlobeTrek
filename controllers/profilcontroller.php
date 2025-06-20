<?php

if (isset($_POST["modifier"])) {
    extract($_POST);

    if (mettreAjourLesDonneesUtilisateur($_SESSION["user"]->id,$prenom, $nom,  $adresse, $tel, $email, "client")) {
        setmessage("Mise à jour des données réussie", "success");
        $_SESSION["user"] = avoirInfoUtilisateur($_SESSION["user"]->id);
    }else {
        setmessage("Erreur lors de la mise à jour des données", "danger");
    }

    return header("location:?page=profil&type=info");
}


if (isset($_POST["editpassword"])) {
    extract($_POST);

    if (isset($_SESSION["user"]) && !empty($actuel_mdp) && !empty($nouveau_mdp) && !empty($confirm_mdp)) {
        $user = avoirInfoUtilisateur($_SESSION["user"]->id);
        if (password_verify($actuel_mdp, $user->mdp)) {
            if ($nouveau_mdp === $confirm_mdp) {
                $new_password = password_hash($nouveau_mdp, PASSWORD_DEFAULT, ['cost' => 12]);
                if (mettreAjourLeMotDePasse($_SESSION["user"]->id, $new_password)) {
                    setmessage("Mot de passe modifié avec succès", "success");
                } else {
                    setmessage("Erreur lors de la modification du mot de passe", "danger");
                }
            } else {
                setmessage("Les mots de passe ne correspondent pas", "danger");
            }
        } else {
            setmessage("Mot de passe actuel incorrect", "danger");
        }
    } else {
        setmessage("Veuillez remplir tous les champs", "danger");
    }
}

if (isset($_SESSION["user"])) {
    $user = avoirInfoUtilisateur($_SESSION["user"]->id);
    // ou
     $_SESSION["user"] = $user;
}else{    
 return header("location:?page=home");
    exit();
} 
$reservations = mesReservations($_SESSION["user"]->id);
require_once("views/includes/entete.php");
require_once("views/profil.php");