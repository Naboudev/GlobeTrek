<?php 

$pays = recupererTousLesPays();
$destination = recupererToutesLesDestinations();

require_once("views/includes/entete.php");
require_once("views/home.php");