<?php 

if (isset($_GET["id"])) {
    $destinations = recupererUneDestination($_GET["id"]);
}

$pays = recupererTousLesPays();
$destinations = recupererToutesLesDestinations();

require_once("views/includes/entete.php");
require_once("views/home.php");
