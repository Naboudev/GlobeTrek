<?php 

if (isset($_SESSION["user"])) {
    if ($_SESSION["user"]->role != "admin") {
        return header("Location:?page=home");
    }
}else{
    return header("Location:?page=home");
}


// traitements
if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img_name = uniqid(). ".jpg";
    $img = $_FILES["image"]["tmp_name"];

    if (ajouterUnPays($nom, $img_name)) {
        if ($_FILES["image"]["size"] > 0) {
            move_uploaded_file($img, "images/".$img_name);  
        }
        setmessage("Ajout de pays avec succes");   
        return header("Location:?page=pays");
    }else{
        setmessage("Erreur d'ajout de pays", "danger"); 
    }
}


if (isset($_GET["idpays"])) {
    if (supprimerUnPays($_GET["idpays"])) {
        setmessage("Suppression de pays avec succes");   
        return header("Location:?page=pays");
    }else{
        setmessage("Erreur de suppression de pays", "danger"); 
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if (modifierUnPays($_GET["id"], $nom, $img_name)) {
        setmessage("Modification de pays avec succes");   
        return header("Location:?page=pays");
    }else{
        setmessage("Erreur de modification de pays", "danger"); 
    }
}

// variables
$pays = recupererTousLesPays();


// inclusions des pages views
require_once("views/includes/entete.php");

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $p = recupererUnPays($_GET["id"]);
    }
require_once("views/pays/ajout.php");  
}else{ 
    require_once("views/pays/pays.php");
}
