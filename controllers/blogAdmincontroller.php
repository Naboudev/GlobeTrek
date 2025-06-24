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
    $error = false;
    extract($_POST);

    $b = recupererUnBlog($_GET["id"]);
    if ($_FILES["image"]["size"] != 0) {
        $type = explode("/", $_FILES["image"]["type"]);

            if ($type[0] == "image"){
                $img = $_FILES["image"]["tmp_name"];
                $img_name = uniqid().".jpg";
                
            }else{
                setmessage("Veuillez choisir une image", "danger");
                $error = true;
            }
    }else{
        $img_name = $b->image;
    }

    if (!$error) {
        if (modifierUnBlog($b->id, $titre, $auteur, $description, $date, $img_name)) {
            if ($img_name != $b->image) {
                move_uploaded_file($img, "images/".$img_name);
            }
            setmessage("Mis a jour d'un blog avec succès");
            return header("Location:?page=blogAdmin");
            exit();
        } else {
            setmessage("Erreur de mis a jour d'un blog", "danger");
        }
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