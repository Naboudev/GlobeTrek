<?php

if (isset($_GET['type'])) {
    $r = recupererUneReservationDestination($_GET["id"]);
    if ($_GET['type'] == "comfirmer") {
        if (changerStatutReservationDestination($r->id, 1)) {
            changerStatutDestination($r->destination, 1);
            $message = "La réservation a été confirmée avec succès.";
            header("Location: ?page=reservationdestinationAdmin");
            exit();
        } else {
            $message = "Erreur lors de la confirmation de la réservation.";
        }

    } elseif ($_GET['type'] == "annuler") {
        if (changerStatutReservationDestination($r->id, 2)) {
            changerStatutDestination($r->destination, 0);
            $message = "La réservation a été annulée avec succès.";
            header("Location: ?page=reservationdestinationAdmin");
            exit();
        } else {
            $message = "Erreur lors de l'annulation de la réservation.";
        }
    }
}




if (isset($_POST["modifier"])) {
    extract($_POST); // Doit contenir: nom, email, date_heure, destination, pays_depart, personnes, enfants

    $aujourdhui = new DateTime();
    $date_heure = new DateTime($date_heure);
    $client_id = $_SESSION["user"]->id;
    $destination_id = isset($destination) ? (int)$destination : 0;
    $pays_depart = htmlspecialchars($pays_depart ?? '');
    $personnes = isset($personnes) ? (int)$personnes : 1;
    $enfants = isset($enfants) ? (int)$enfants : 0;

    // Validation des données
    if ($date_heure < $aujourdhui) {
        setmessage("La date et l'heure ne peuvent pas être dans le passé", "danger");
    } elseif ($destination_id <= 0) {
        setmessage("Destination invalide", "danger");
    } else {
        // Enregistrement de la réservation
        if (ajouterReservationDestination($_GET["id"], $date_heure, $destination_id, $pays_depart, $personnes, $enfants, $demandes_speciales, $methode_paiement, $statuts, $client_id)) {
            setmessage("Réservation ajoutée avec succès", "success");
            header("Location: ?page=reservationdestinationAdmin");
            exit();
        } else {
            setmessage("Erreur lors de l'ajout de la réservation", "danger");
        }
    }
}
$reservationspays = recupererToutesLesReservationsDestinations();
  
if (isset($_GET["type"]) && $_GET["type"] == "edit") {
    $r = recupererUneReservationDestination($_GET["id"]);
    $destinations = recupererToutesLesDestinations();
    $pays = recupererTousLesPays();

    require_once("views/reservationpaysAdminEdit.php");
}else{
    require_once("views/reservationpaysAdmin.php");
}

require_once("views/includes/entete.php");