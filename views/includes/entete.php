<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>GlobeTrek</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    
        <!-- Libraries Stylesheet -->
        <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css"/>


        <!-- Template Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-primary navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="?page=home" class="navbar-brand p-0">
                    <h1 class="m-0 bg-primary text-white "><i class=""></i>GlobeTrek</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse bg-primary text-white" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <?php if(isset($_SESSION["user"]) && $_SESSION["user"]->role == "admin"): ?>
                            <div class="navbar-nav ms-auto py-0">
                                <a href="?page=pays" class="nav-item nav-link">Pays</a>
                                <a href="?page=destination" class="nav-item nav-link">Destinations</a>
                                <a href="?page=chambreAdmin" class="nav-item nav-link">Chambres</a>
                                <a href="?page=reservationAdmin" class="nav-item nav-link">Réservations</a>
                                <a href="?page=blogAdmin" class="nav-item nav-link">Blogs</a>
                            </div>
                        <?php else: ?>
                        <div class="navbar-nav ms-auto py-0">
                        <a href="?page=home" class="nav-item nav-link ">Acceuil</a>
                        <a href="?page=pays/destination" class="nav-item nav-link">Pays/Destinations</a>
                        <a href="?page=chambre" class="nav-item nav-link">Chambres</a>
                        <a href="?page=reservation" class="nav-item nav-link">Réservations</a>
                        <a href="?page=contact" class="nav-item nav-link">Contact</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="?page=blog" class="dropdown-item">Blog</a>
                                <a href="?page=paquets" class="dropdown-item">Paquets</a>
                                <a href="tour.html" class="dropdown-item">Explorer la visite</a>
                                <a href="gallery.html" class="dropdown-item">Notre Gallerie</a>
                                <a href="guides.html" class="dropdown-item">Guides de voyage</a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(isset($_SESSION["user"])): ?>
                        <div class="dropdown">
                            <a href="packages.html" class="nav-item nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-user"></i> <?= $_SESSION["user"]->prenom ?></a>
                            <div class="dropdown-menu rounded">
                                <a href="?page=profil" class="dropdown-item"><i class="fas fa-user-alt me-2"></i>Profil</a>
                                <a href="?page=deconnexion" class="dropdown-item"><i class="fas fa-power-off me-2"></i>Deconnexion</a>
                            </div>
                        </div>
                        <?php else: ?>
                        <a href="?page=connexion" class="nav-item nav-link ">Connexion</a>
                        <?php endif; ?>

                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
         <!-- <div class="container-fluid" style="margin-top: 125px;"></div> -->
