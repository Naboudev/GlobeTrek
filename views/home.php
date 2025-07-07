
<!-- Carousel Start -->
<div class="carousel-header" style="margin-top: 90px;">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="images/images/carousel-2.jpg" class="img-fluid zoom-bg" alt="Image">
                <div class="carousel-caption animate text-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold fadeInUp">Explore The World</h4>
                        <h1 class="display-2 text-capitalize text-white fadeInUp">Let's The World Together!</h1>
                        <p class="mb-4 fs-5 fadeInUp">Lorem Ipsum is simply dummy text of the printing industry.</p>
                        <a href="reservation.php" class="btn btn-primary btn-lg px-4 py-2 mt-3 fadeInUp" style="animation-delay: 1.1s;">Réserver maintenant</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="images/images/carousel-1.jpg" class="img-fluid zoom-bg" alt="Image">
                <div class="carousel-caption animate text-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold fadeInUp">Explore The World</h4>
                        <h2 class="display-2 text-capitalize text-white fadeInUp">Find Your Perfect Tour</h2>
                        <p class="mb-4 fs-5 fadeInUp">Lorem Ipsum is simply dummy text of the printing industry.</p>
                        <a href="reservation.php" class="btn btn-primary btn-lg px-4 py-2 mt-3 fadeInUp" style="animation-delay: 1.1s;">Réserver maintenant</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="images/682cab084e192.jpg" class="img-fluid zoom-bg" alt="Image">
                <div class="carousel-caption animate text-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold fadeInUp">Explore The World</h4>
                        <h1 class="display-2 text-capitalize text-white fadeInUp">You Like To Go?</h1>
                        <p class="mb-4 fs-5 fadeInUp">Lorem Ipsum is simply dummy text of the printing industry.</p>
                        <a href="reservation.php" class="btn btn-primary btn-lg px-4 py-2 mt-3 fadeInUp" style="animation-delay: 1.1s;">Réserver maintenant</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Animations CSS -->
<style>
/* Image zoom on load */
.zoom-bg {
    transform: scale(1.1);
    transition: transform 8s ease;
}
.carousel-item.active .zoom-bg {
    transform: scale(1);
}

/* Fade-in up animation */
.fadeInUp {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease-out forwards;
}

.carousel-caption.animate h1,
.carousel-caption.animate h2,
.carousel-caption.animate h4,
.carousel-caption.animate p,
.carousel-caption.animate a {
    animation-delay: 0.3s;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

        
<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 wow fadeInLeft animated-box" data-wow-delay="0.1s" 
                 style="background: linear-gradient(rgba(255, 255, 255, .85), rgba(255, 255, 255, .85)), 
                        url(images/images/about-img-1.jpg) center/cover no-repeat; 
                        border-radius: 15px; padding: 40px; box-shadow: 0 0 30px rgba(0,0,0,0.1);">
                <h5 class="section-about-title pe-3 text-primary fadeInUp">Qui Sommes-Nous</h5>
                <h1 class="mb-4 fadeInUp">Bienvenue chez <span class="text-primary">GlobeTrek</span></h1>
                <p class="mb-4 fadeInUp">Bienvenue sur <strong>Globe Trek</strong>, votre compagnon de confiance pour explorer le monde et réserver votre hébergement en toute simplicité. <br><br>
                    Chez Globe Trek, nous croyons que chaque voyage est une aventure unique, qu’il s’agisse d’une escapade le temps d’un week-end ou d’un grand tour du monde. <br><br>
                    Notre objectif : <strong>faciliter vos projets de voyage</strong> en vous offrant un large choix d’hébergements, des conseils pratiques et des outils de planification. <br><br>
                    Globe Trek, c’est aussi une équipe passionnée, toujours à l’écoute, pour vous accompagner avant, pendant et après votre séjour. 🧳
                    <br><br><strong>Trouvez, réservez, partez</strong> – Globe Trek, votre voyage commence ici.</p>  
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3 text-primary fadeInDown">Services</h5>
            <h1 class="mb-0 fadeInUp">Nos Services</h1>
        </div>
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-box d-flex flex-column align-items-center bg-white border border-primary rounded p-4 text-center h-100 shadow-sm transition">
                    <div class="service-icon mb-3 zoom-in">
                        <i class="fa fa-globe fa-3x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Circuits Internationaux</h5>
                    <p>Explorez les quatre coins du globe avec nos circuits organisés, pour des aventures inoubliables.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box d-flex flex-column align-items-center bg-white border border-primary rounded p-4 text-center h-100 shadow-sm transition">
                    <div class="service-icon mb-3 zoom-in">
                        <i class="fa fa-hotel fa-3x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Réservation d’Hôtels</h5>
                    <p>Réservez des hébergements de qualité dans le monde entier, en toute sécurité et au meilleur prix.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-box d-flex flex-column align-items-center bg-white border border-primary rounded p-4 text-center h-100 shadow-sm transition">
                    <div class="service-icon mb-3 zoom-in">
                        <i class="fa fa-user fa-3x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Guides GlobeTrek</h5>
                    <p>Profitez de conseils d’experts grâce à nos guides détaillés pour préparer vos voyages.</p>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-box d-flex flex-column align-items-center bg-white border border-primary rounded p-4 text-center h-100 shadow-sm transition">
                    <div class="service-icon mb-3 zoom-in">
                        <i class="fa fa-cog fa-3x text-primary"></i>
                    </div>
                    <h5 class="mb-3">Organisation d’Événements</h5>
                    <p>Mariages, séminaires ou voyages de groupe, nous gérons vos événements avec professionnalisme.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="btn btn-primary rounded-pill py-3 px-5 fadeInUp" href="#">En savoir plus</a>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Animation CSS -->
<style>
.fadeInUp {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s forwards;
}
.fadeInDown {
    opacity: 0;
    transform: translateY(-30px);
    animation: fadeInDown 1s forwards;
}
.zoom-in {
    animation: zoomIn 1s ease forwards;
}
.animated-box {
    animation: fadeInUp 1s ease-in-out forwards;
}
.transition {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.transition:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

/* Keyframes */
@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes fadeInDown {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes zoomIn {
    0% {
        transform: scale(0.8);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}
</style>


<!-- Destinations Populaires -->
<div class="container-fluid gallary py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Destinations</h5>
        <h1 class="mb-4">Destinations Populaires</h1>
        <p class="mb-0">Explorez les plus belles destinations à travers le monde.</p>
    </div>

    <div class="tab-class text-center">
        <!-- Onglets pays -->
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <?php $first = true; foreach ($pays as $p): ?>
                <li class="nav-item">
                    <a class="d-flex align-items-center justify-content-center py-2 px-3 mx-2 border border-primary bg-light rounded-pill <?= $first ? 'active' : '' ?>" data-bs-toggle="pill" href="#tab-<?= $p['id'] ?>">
                        <span class="text-dark fw-bold"><?= htmlspecialchars($p["nom"]) ?></span>
                    </a>
                </li>
            <?php $first = false; endforeach; ?>
        </ul>

        <!-- Contenu des onglets -->
        <div class="tab-content">
            <?php $first = true; foreach ($pays as $p): ?>
                <div id="tab-<?= $p['id'] ?>" class="tab-pane fade <?= $first ? 'show active' : '' ?> p-0">
                    <div class="row g-4">
                        <?php
                        // Filtrer les destinations par pays_id
                        foreach ($destinations as $d):
                            if ($d->pays_id != $p['id']) continue;
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="images/<?= htmlspecialchars($d->image) ?>" class="card-img-top img-fluid rounded-top" alt="<?= htmlspecialchars($d->nom) ?>">
                                    <div class="card-body d-flex flex-column text-start">
                                        <h5 class="card-title text-uppercase"><?= htmlspecialchars($d->nom) ?></h5>
                                        <a href="?page=reservation&id=<?= $d->id ?>" class="btn btn-outline-primary mt-auto">
                                            Réserver <i class="fa fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php $first = false; endforeach; ?>
        </div>
    </div>
                            
</div>
<!-- Destinations Populaires End -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Notre Gallerie</h5>
        <h1 class="mb-4">Gallarie du Tourisme et des Voyages</h1>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
        </p>
    </div>
    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                    <span class="text-dark" style="width: 150px;">Tout</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2">
                    <span class="text-dark" style="width: 150px;">Tour du Monde</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-3">
                    <span class="text-dark" style="width: 150px;">Tour de l'Océan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-4">
                    <span class="text-dark" style="width: 150px;">Tournée d'été</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-5">
                    <span class="text-dark" style="width: 150px;">Tour Sportif</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-1.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-1.jpg" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-4.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-4.jpg" data-lightbox="gallery-4" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-5.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-5.jpg" data-lightbox="gallery-5" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-6.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-6.jpg" data-lightbox="gallery-6" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-7.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-7.jpg" data-lightbox="gallery-7" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-8.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-8.jpg" data-lightbox="gallery-8" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-9.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-9.jpg" data-lightbox="gallery-9" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-10.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-10.jpg" data-lightbox="gallery-10" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-2" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-11.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-12.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-3" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-12.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-8.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-4" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-4.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-5" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-1.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="images/images/gallery-4.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">Tour du monde</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Tour Booking Start -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Réservation</h5>
                <h1 class="text-white mb-4">Réservation en Ligne</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Lire la suite</a>
            </div>
            <div class="col-lg-6">
                <h1 class="text-white mb-3">Réservez un  visite Offers</h1>
                <p class="text-white mb-4">Obtenez <span class="text-warning">50% de réduction</span>  sur votre premier voyage d’aventure avec GlobeTrek. Obtenez plus d’offres ici.</p>
                <?php if (isset($_SESSION["user"])): ?>
                    <div class="text-center my-5">
                        <a href="?page=ajoutreservationpays" class="btn btn-primary btn-lg px-5">Réserver maintenant</a>
                    </div>
                <?php else: ?>
                    <div class="text-center my-5">
                        <div class="alert alert-warning">
                            <p>Veuillez vous connecter pour réserver.</p>
                            <a href="?page=connexion" class="btn btn-outline-primary">Se connecter</a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- Tour Booking End -->

<!-- Travel Guide Start -->
<div class="container-fluid guide py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Guide de Voyage</h5>
            <h1 class="mb-0">Rencontrez Notre Guide</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="images/images/guide-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Nom Complet</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="images/images/guide-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Nom Complet</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="images/images/guide-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Nom Complet</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="images/images/guide-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Nom Complet</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Travel Guide End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">S'inscrire</h5>
            <h1 class="text-white mb-4">Notre Infolettre</h1>
            <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
            </p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">S'inscrire</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->