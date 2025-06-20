<?php


unset($_SESSION["user"]);
setmessage("Deconnexion avec succes");
return header("Location:?page=home");