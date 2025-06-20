<?php 



require_once("views/includes/entete.php");

if (isset($_GET["id"])) {
    $c = recupererUneChambre($_GET["id"]);
} else {
    header("Location:?page=home");
    exit();
    
}
require_once("views/detailchambre.php");
