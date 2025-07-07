<?php


// traitements
if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img_name = uniqid(). ".jpg";
    $img = $_FILES["image"]["tmp_name"];
    
    if (AjouterUneDestination($nom, $description, $prix, $pays_id, $img_name)) { 
        if ($_FILES["image"]["size"] > 0) {
            move_uploaded_file($img, "images/".$img_name);  
        }
        setmessage("Ajout de destination avec succes");
        return header("location:?page=destination");
    }else{
        setmessage("Erreur d'ajout de destination", "danger"); 
    }
    
}


if (isset($_GET["iddestinations"])) {
    if (supprimerUneDestination($_GET["iddestinations"])) {
        setmessage("Suppression de destinations avec succes");   
        return header("Location:?page=destination");
    }else{
        setmessage("Erreur de suppression de destinations", "danger"); 
    }
}


if (isset($_POST["modifier"])) {
    extract($_POST);
    if (modifierUneDestination($_GET["id"], $img_name, $nom, $description, $prix, $pays_id,)) {
        setmessage("Modification de destinations avec succes");   
        return header("Location:?page=destination");
     }else{
        setmessage("Erreur de modification de destinations", "danger"); 
    }
}


// variables
$pays = recupererTousLesPays();
$destinations = recupererToutesLesDestinations();


// redirections
require_once("views/includes/entete.php");

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $d = recupererUneDestination($_GET["id"]);
    }
    require_once("views/destination/ajout.php");
}else {

    require_once("views/destination/destination.php"); 
}