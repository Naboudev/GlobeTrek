<section class="accomodation_area section_gap">
    <div class="container row accordion" id="profilAccordion" style="margin-top: 120px;">
        <p class="container d-flex flex-column col-md-3">
            <a class="btn btn-primary" href="?page=profil&type=info" >
            Mes Informations
            </a>
            <a class="btn btn-primary mt-3" href="?page=profil&type=mesreservations" >
            Mes Réservations
            </a>
            <a class="btn btn-primary mt-3" href="?page=profil&type=password" >
            Mot de passe
            </a>
            <a class="btn btn-outline-danger mt-3" href="?page=deconnexion" role="button">
            Deconnexion
            </a>     
        </p>
        <div class="col-md-9">
            <?php require_once("views/includes/getmessage.php"); ?>
             <?php
                if (isset($_GET["type"])) {
                    switch ($_GET["type"]) {
                        case "mesreservations":
                            require_once("views/profil/reservation.php");
                            break;
                        case "password":
                            require_once("views/profil/password.php");
                            break;
                        default:
                            require_once("views/profil/info.php");
                    }
                } else {
                    require_once("views/profil/info.php");
                }
            ?> 
        </div>
    </div>
</section>