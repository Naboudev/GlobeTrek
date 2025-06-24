<?php 

$pays = recupererTousLesPays();
$destinations = recupererToutesLesDestinations();

require_once("views/includes/entete.php");
require_once("views/home.php");