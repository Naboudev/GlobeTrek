<?php 

if (isset($_GET["id"])) {
    $destinations = recupererUneDestination($_GET["id"]);
}

if (isset($_POST["reserver"])) {
    extract($_POST); // Doit contenir: departureDate, guests, specialRequests, paymentMethod

    $aujourdhui = new DateTime();
    $email = $_SESSION["user"]->email ?? '';
    $date_depart = new DateTime($departureDate);
    $pays_depart = htmlspecialchars($pays_depart ?? '');
    $personnes = isset($guests) ? (int)$guests : 1;
    $enfants = isset($children) ? (int)$children : 0;
    $demandes_speciales = htmlspecialchars($specialRequests ?? '');
    $prix = isset($price) ? (float)$price : 0.0; // Assurez-vous que le prix est un float
    $methode_paiement = htmlspecialchars($paymentMethod ?? '');
    $actions = 0; // Par défaut, l'action est "en attente"
    $destination_id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;


    // validation des dates
    if ($date_depart < $aujourdhui) {
        setmessage("La date de départ ne peut pas être dans le passé", "danger");
    } elseif ($destination_id <= 0) {
        setmessage("Destination invalide", "danger");
    } else {
        // Enregistrement de la réservation
        if (ajouterReservationDestination($email, $date_depart, $destination_id, $pays_depart, $personnes, $enfants, $demandes_speciales, $methode_paiement, $actions)) {
            setmessage("Réservation ajoutée avec succès", "success");
            header("Location: ?page=reservationdestinationAdmin");
            exit();
        } else {
            setmessage("Erreur lors de l'ajout de la réservation", "danger");
        }
    }

}
    

$pays = recupererTousLesPays();
$destinations = recupererToutesLesDestinations();
$reservationspays = recupererToutesLesReservationsDestinations();
     
require_once("views/includes/entete.php");
require_once("views/home.php");
