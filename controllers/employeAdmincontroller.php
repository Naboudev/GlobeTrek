<?php

if (isset($_POST["ajouter"])) {
    extract($_POST);

        $mdp = password_hash($mdp, PASSWORD_DEFAULT, ["cost" => 12]);
        if (inscrire($prenom, $nom, $adresse, $tel, $email, $mdp, $role)) {
            supprimerLesDonneesDeLInput();
            setmessage("Ajout employé avec succes");   
            return header("Location:?page=employeAdmin");
        }else{
        setmessage ("Erreur d'ajout employé", "danger");
    }

    enregistrerLesDonneesDeLInput();
}

if (isset($_GET["idDeleting"])) {
    if (supprimerUnUtilisateur($_GET["idDeleting"])) {
        setmessage("Utilisateur supprimé avec succès");
        return header("Location:?page=employeAdmin");
    } else {
        setmessage("Erreur de suppression de l'utilisateur", "danger");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if (mettreAjourLesDonneesUtilisateur($_GET["id"], $prenom, $nom, $adresse, $tel, $email, $role)) {
        setmessage("Mises a jour avec succès");
        supprimerLesDonneesDeLInput();
        return header("Location:?page=employeAdmin");
    } else {
        setmessage("Erreur de mises a jour", "danger");
        enregistrerLesDonneesDeLInput();
    }
}

$employes = recupererTousLesEmployes();

require_once("views/includes/entete.php");

if (isset($_GET["type"])){
    if (isset($_GET["id"])) {
        $e = recupererUnUtilisateur($_GET["id"]);
    } 
    require_once("views/ajoutemploye.php");
}else{
require_once("views/employeAdmin.php");
}
