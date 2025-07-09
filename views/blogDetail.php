<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="margin-top: 90px;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Details du Blog : <strong><?= $b->titre ?></strong></h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="?page=blog">Blogs</a></li>
            <li class="breadcrumb-item active text-white"><?= $b->titre ?></li>
        </ol>    
    </div>
</div>
<!-- Header End --> 

<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Détails du Blog</h5>
            <h1 class="mb-0"><?= htmlspecialchars($b->titre) ?></h1>
        </div>
        <!-- Affichage d'un seul article -->
        <div class="container mt-5">
            <div class="card mb-3 shadow-lg">
                <div class="row g-0">
                    <img src="images/<?= htmlspecialchars($b->image) ?>" class="card-img-top" style="height: 300px;width:50%  object-fit: cover;" alt="Image du blog">
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <h1 class="card-title"><?= htmlspecialchars($b->titre) ?></h1>
                        <p class="text-muted">
                            Par <strong><?= htmlspecialchars($b->auteur) ?></strong>
                        </p>
                        <i class="fa fa-calendar-alt me-1 text-primary"></i> <?= htmlspecialchars($b->date) ?>
                        <p class="card-text" style="white-space: pre-line;">
                            <?= nl2br(htmlspecialchars($b->description)) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
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