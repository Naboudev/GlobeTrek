<?php 

$b = recupererUnBlog($_GET["id"]);

require_once("views/blogDetail.php");
require_once("views/includes/entete.php");