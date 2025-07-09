<?php


$titre = "Listes des blogs";

if (isset($_POST["ajouter"])){
    extract($_POST);

    $type = explode("/", $_FILES["image"]["type"]);

    if ($type[0] == "image"){
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";
        if (ajouterUnBlog($titre, $auteur, $description, $date, $img_name)) {
            if ($_FILES["image"]["size"] > 0) {
                move_uploaded_file($img, "images/".$img_name);
            }
            setmessage("Ajout de blog avec succès");
            return header("Location:?page=blogAdmin");
            exit();
        } else {
            setmessage("Erreur d'ajout de blog", "danger");
        }
    }else{
        setmessage("Veuillez choisir une image", "danger");
    }
}

if (isset($_POST["modifier"])){
    extract($_POST);
    $b = recupererUnBlog($_GET["id"]);
    if ($_FILES["image"]["size"] > 0) {
        $img_name = uniqid(). ".jpg";
         $img = $_FILES["image"]["tmp_name"];
            move_uploaded_file($img, "images/".$img_name);  
    }else{
        $img_name = $d->image;
    }
    if (modifierUnBlog($_GET["id"], $titre, $auteur, $description, $date, $img_name)) {
        setmessage("Modification d'un blog avec succès");
        return header("Location:?page=blogAdmin");
    } else {
        setmessage("Erreur de modification d'un blog", "danger");
    }
}



if (isset($_GET["idblogs"])){
    if (supprimerUnBlog($_GET["idblogs"])){
        setmessage("Suppression avec succes");
        return header("Location:?page=blogAdmin");
        exit();
    }else{
        setmessage("Erreur de suppression", "danger");
    }
}
    
$blogs = listeDesBlogs();
if (isset($_GET["type"])){
    if (isset($_GET["id"])){
        $b = recupererUnBlog($_GET["id"]);
    }
    $titre = $_GET["type"] == "add" ? "Formulaire d'ajout Blog" : "Formulaire de modification Blog";
}


require_once("views/blogAdmin.php");
require_once("views/includes/entete.php");