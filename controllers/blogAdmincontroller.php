<?php


$titre = "Listes des blogs";


if (isset($_GET["type"])){
    $titre = $_GET["type"] == "add" ? "Formulaire d'ajout Blog" : "Formulaire de modification Blog";
}


require_once("views/blogAdmin.php");
require_once("views/includes/entete.php");