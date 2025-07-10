<?php


if (isset($_GET['type'])) {
    $r = recupererUneReservation($_GET['id']);
    if ($_GET['type'] == "confirmer") {
        if (changerStatutReservation($r->id, 1)) {
            changerStatutChambre($r->chambre_id, 1);
            $message = "La réservation a été confirmée avec succès.";
            header("Location: ?page=reservationAdmin");
            exit();
        }else {
            $message = "Erreur lors de la confirmation de la réservation.";
        }
    }else if ($_GET['type'] == "annuler") {
        if (changerStatutReservation($r->id, 2)) {
            changerStatutChambre($r->chambre_id, 0);
            $message = "La réservation a été annulée avec succès.";
            header("Location: ?page=reservationAdmin");
            exit();
        }else {
            $message = "Erreur lors de l'annulation de la réservation.";
        }
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST); // Doit contenir: arrivalDate, departureDate, guests, specialRequests, paymentMethod

    $aujourdhui = new DateTime();
    $date_arrivee = new DateTime($arrivalDate);
    $date_depart = new DateTime($departureDate);
    $client_id = $_SESSION["user"]->id;
    $methode_paiement = htmlspecialchars($paymentMethod ?? '');
    $nombre_personnes = isset($guests) ? (int)$guests : 1;
    $actions = 0; // Par défaut, l'action est "en attente"
    $chambre_id = isset($chambre_id) ? (int)$chambre_id : 0;
    

    // Validation des dates
    if ($date_arrivee < $aujourdhui) {
        setmessage("La date d'arrivée ne peut pas être inférieure à aujourd'hui", "danger");
    } elseif ($date_depart <= $date_arrivee) {
        setmessage("La date de départ doit être après la date d'arrivée", "danger");
    } else {
        $nombre_nuits = $date_arrivee->diff($date_depart)->days;

        // Récupération de la chambre
        $c = recupererUneChambre($chambre_id);

        if (!$c) {
            setmessage("Chambre invalide", "danger");
        } 
        // elseif ($c->disponible == 0) {
        //     setmessage("Cette chambre n'est pas disponible", "danger");
        // } 
        else {
            $prix = $nombre_nuits * $c->prix;


            // Appel de la fonction ajouterReservation avec ordre correct
            if (ajouterReservation($reference, $date_arrivee, $date_depart, $nombre_nuits, $nombre_personnes, $demandes_speciales, $methode_paiement, $date_reservation, $chambre_id, $client_id, $prix, $actions = 1)) {
                setmessage("Réservation ajoutée avec succès", "success");
                header("Location: ?page=reservationAdmin");
                exit();
            } else {
                setmessage("Erreur lors de l'ajout de la réservation", "danger");
            }
        }
    }

    enregistrerLesDonneesDeLInput();
}

$reservations = recupererToutesLesReservations();

// print_r($reservations);
// die();
 

if (isset($_GET["type"]) && $_GET["type"] == "edit") {
    $r = recupererUneReservation($_GET["id"]);
    $chambres = recupererToutesLesChambres();
    $clients = recupererTousLesClients();
     
    require_once("views/reservationEdit.php");
}else{
    require_once("views/reservationAdmin.php");
}
require_once("views/includes/entete.php");