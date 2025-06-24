<?php 



require_once("views/includes/entete.php");

if (isset($_GET["id"])) {
    $c = recupererUneChambre($_GET["id"]);
} else {
    header("Location:?page=home");
    exit();
}
$chambres = recupererToutesLesChambres();
require_once("views/detailchambre.php");
