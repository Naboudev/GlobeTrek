<?php 

if (isset($_SESSION["reservations"])) {

   // Appel de la fonction ajouterReservation avec ordre correct
            $resultat = ajouterReservation(
                $_SESSION["reservations"]["reference"],
                $_SESSION["reservations"]["date_arrivee"],
                $_SESSION["reservations"]["date_depart"],
                $_SESSION["reservations"]["nombre_nuits"],
                $_SESSION["reservations"]["nombre_personnes"],
                $_SESSION["reservations"]["demandes_speciales"],
                $_SESSION["reservations"]["methode_paiement"],
                $_SESSION["reservations"]["date_reservation"],
                $_SESSION["reservations"]["chambre_id"],
                $_SESSION["reservations"]["client_id"],
                $_SESSION["reservations"]["prix"],
                $_SESSION["reservations"]["actions"]

            );

            unset($_SESSION["reservations"]);
}


require_once("views/retour.php");
require_once("views/includes/entete.php");
