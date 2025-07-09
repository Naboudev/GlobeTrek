<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="margin-top: 90px;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Notre Blog</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Blog</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5">
            <h5 class="section-title px-3">Notre Blog</h5>
            <h1 class="mb-4">Blogs de GlobeTrek populaires</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($blogs as $b): ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img src="images/<?= $b->image ?>" style="height: 250px; object-fit: cover;" width="100%" alt="" class="img-fluid">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?= $b->date ?></small>
                            <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                            <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <p class="mb-3"><?= $b->auteur ?></p>
                        <a href="#" class="h5"><?= $b->titre ?></a> <br><br>
                        <a href="?page=blogDetail&id=<?= $b->id ?>" class="btn btn-primary rounded-pill py-2 px-5">Voir Plus →</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5" >
    <div class="container text-center py-5">
        <div class="mx-auto text-center">
            <h5 class="subscribe-title px-3">S'inscrire</h5>
            <h1 class="text-white mb-4">Notre infolettre</h1>
            <p class="text-white mb-5">Découvrez nos nouvelles offres de voyage et réservez facilement votre prochaine destination en ligne, en toute sécurité. Profitez de <span class="text-warning"> -10% avec le code **GLOBETREK10**</span> sur votre première réservation. Inspirez-vous de nos idées d’évasion et explorez le monde avec GlobeTrek !
            </p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">S'inscrire</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->