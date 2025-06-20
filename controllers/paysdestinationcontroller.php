<?php 
$pays = recupererTousLesPays();
$destinations = recupererToutesLesDestinations();
require_once("views/paysetdestination.php");
require_once("views/includes/entete.php");