<?php

require_once("views/includes/entete.php");

if (isset($_GET["id"])) {
    $d = recupererUneDestination($_GET["id"]);
}else {
    header("Location:?page=home");
    exit();
}

$destinations = recupererToutesLesDestinations();
require_once("views/detailpaysdestination.php");