<?php 


// Contrôle d'accès
if (!isset($_SESSION["user"])) {
    setmessage("Veuillez vous connecter pour effectuer une réservation.", "danger");
    header("Location: ?page=connexion");
    exit();
require_once("views/ajoutreservationpays.php");

}


require_once("views/includes/entete.php");