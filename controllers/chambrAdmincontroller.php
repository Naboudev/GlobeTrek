<?php


// traitement
if (isset($_POST["ajouter"])) {
    extract($_POST);
  
    $disponible = isset($disponible) ? "oui" : "non"; // Si le champ 'disponible' est coché, on le considère comme disponible

    $img_name = uniqid(). ".jpg";
    $img = $_FILES["image"]["tmp_name"];
    
    if (AjouterUneChambre($nom, $type, $description, $capacite, $prix, $img_name , $disponible)) { 
        if ($_FILES["image"]["size"] > 0) {
            move_uploaded_file($img, "images/".$img_name);  
        } 
        setmessage("Ajout de chambre avec succes");
        return header("location:?page=chambreAdmin");
}  
    else{
        setmessage("Erreur d'ajout de chambre", "danger"); 
    } 
}

if (isset($_GET["idchambres"])) {
    if (supprimerUneChambre($_GET["idchambres"])) {
        setmessage("Chambre supprimée avec succès");
        return header("location:?page=chambreAdmin");
    } else {
        setmessage("Erreur de suppression de la chambre", "danger");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    $disponible = isset($disponible) ? "oui" : "non"; // Si le champ 'disponible' est coché, on le considère comme disponible

    if (modifierUneChambre($_GET["id"], $nom, $type, $description, $capacite, $prix, $img_name, $disponible)) {
        setmessage("Modification de chambre avec succès");
        return header("location:?page=chambreAdmin");
    } else {
        setmessage("Erreur de modification de la chambre", "danger");
    }
}


$chambres = recupererToutesLesChambres();

require_once("views/includes/entete.php");

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $c = recupererUneChambre($_GET["id"]);
    }
    require_once("views/ajoutchambre.php");
}else {
    require_once("views/chambreAdmin.php"); 
}

