<?php
require 'config.php';
use Paydunya\Checkout\CheckoutInvoice;

if (!isset($_SESSION["user"])) {
    setmessage("Vous devez vous connecter pour accéder à cette page", "danger");
    header("Location: ?page=connexion");
    exit();
}

if (isset($_GET["id"])) {
    $chambre_id = (int) $_GET["id"];
    $chambre = recupererUneChambre($chambre_id);
}

if (isset($_POST["reserver"])) {
    extract($_POST); // Doit contenir: arrivalDate, departureDate, guests, specialRequests, paymentMethod

    $aujourdhui = new DateTime();
    $date_arrivee = new DateTime($arrivalDate);
    $date_depart = new DateTime($departureDate);
    $client_id = $_SESSION["user"]->id;
    $date_reservation = date("Y-m-d H:i:s");
    $demandes_speciales = htmlspecialchars($specialRequests ?? '');
    $prix = isset($price) ? (float)$price : 0.0; // Assurez-vous que le prix est un float
    $methode_paiement = htmlspecialchars($paymentMethod ?? '');
    $nombre_personnes = isset($guests) ? (int)$guests : 1;
    $actions = 1; // Par défaut, l'action est "en attente"
    $chambre_id = isset($chambre_id) ? (int)$chambre_id : (int) $_GET["id"];
    

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
        //  elseif ($c->disponible == 0) {
        //     setmessage("Cette chambre n'est pas disponible", "danger");
        // }
         else {
            $prix = $nombre_nuits * $c->prix;
            $reference = "#ref" . time(); // Exemple : #ref1718636881
            $invoice = new CheckoutInvoice();
            $invoice->addItem($c->nom, 1, $prix, $prix);    
            $invoice->setTotalAmount($prix);
            // die($prix);
            if ($invoice->create()) {
                $_SESSION["reservations"] = [
                    "reference" => $reference,
                    "date_arrivee" => $date_arrivee->format("Y-m-d"),
                    "date_depart" => $date_depart->format("Y-m-d"),
                    "nombre_nuits" => $nombre_nuits,
                    "nombre_personnes" => $nombre_personnes,
                    "demandes_speciales" => $demandes_speciales,
                    "methode_paiement" => $methode_paiement,
                    "date_reservation" => $date_reservation,
                    "chambre_id" => $chambre_id,
                    "client_id" => $client_id,
                    "prix" => $prix,
                    "actions" => $actions
                ];
                $_SESSION["adresse"] = $adresse;
                return header("Location:".$invoice->getInvoiceUrl());
            }else{
                die("Erreur:".$invoice->response_text);
            }

        }
    }

    enregistrerLesDonneesDeLInput();
}


$chambres = recupererToutesLesChambres();
require_once("views/reservation.php");
require_once("views/includes/entete.php");