<?php
session_start();

require_once("models/fonctions.php");
require_once("models/database.php");


if (isset($_GET["page"])) {
    if ($_GET["page"] == "inscription") {
        require_once("controllers/registercontroller.php");
    }elseif ($_GET["page"] == "connexion") {
        require_once("controllers/logincontroller.php");
    }elseif ($_GET["page"] == "profil") {
        require_once("controllers/profilcontroller.php");
    }elseif ($_GET["page"] == "deconnexion") {
        require_once("controllers/logoutncontroller.php");
    }elseif ($_GET["page"] == "pays") {
        require_once("controllers/payscontroller.php");
    }elseif ($_GET["page"] == "destination") {
        require_once("controllers/destinationcontroller.php");
    }elseif ($_GET["page"] == "contact") {
        require_once("controllers/contactcontroller.php");
    }elseif ($_GET["page"] == "pays/destination") {
        require_once("controllers/paysdestinationcontroller.php");
    }elseif ($_GET["page"] == "paquets") {
        require_once("controllers/paquetscontroller.php");
    }elseif ($_GET["page"] == "blog") {
        require_once("controllers/blogcontroller.php");
    }elseif ($_GET["page"] == "blogAdmin") {
        require_once("controllers/blogAdmincontroller.php");
    }elseif ($_GET["page"] == "blogDetail") {
        require_once("controllers/blogDetailcontroller.php");
    }elseif ($_GET["page"] == "chambre") {
        require_once("controllers/chambrecontroller.php");
    }elseif ($_GET["page"] == "chambreAdmin") {
        require_once("controllers/chambrAdmincontroller.php");
    }elseif ($_GET["page"] == "reservationAdmin") {
        require_once("controllers/reservationAdmincontroller.php");
    }elseif ($_GET["page"] == "reservation") {
        require_once("controllers/reservationcontroller.php");
    }elseif ($_GET["page"] == "detailchambre") {
        require_once("controllers/detailchambrecontroller.php");
    }elseif ($_GET["page"] == "reservationpaysAdmin") {
        require_once("controllers/reservationpaysAdmincontroller.php");
    }elseif ($_GET["page"] == "employeAdmin") {
        require_once("controllers/employeAdmincontroller.php");
    }elseif ($_GET["page"] == "ajoutreservationpays") {
        require_once("controllers/ajoutreservationpayscontroller.php");
    }else{
        require_once("controllers/homecontroller.php");     
    }
}else{
    require_once("controllers/homecontroller.php");     
}

require_once("views/includes/pied.php"); 
