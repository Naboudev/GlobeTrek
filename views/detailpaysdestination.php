<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="margin-top: 90px;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Détails de la Destinations : <strong><?= $d->nom ?></strong></h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="?page=pays/destination">Pays/Destination</a></li>
            <li class="breadcrumb-item active text-white"><?= $d->nom ?></li>
        </ol>    
    </div>
</div>
<!-- Header End -->
 <div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Destination</h5>
            <h1 class="mb-0"><?= htmlspecialchars($d->nom) ?></h1>
        </div>
        <!-- Détails Destination -->
        <div class="container py-5" style="margin-top: 120px;">
            <div class="row g-4">
                <div class="col-md-6">
                    <img src="images/<?= htmlspecialchars($d->image) ?>" alt="<?= htmlspecialchars($d->nom) ?>" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <h4>Pays : <?= htmlspecialchars($d->nom) ?></h4>
                    <p><strong>Prix :</strong> <?= number_format($d->prix, 0, ',', ' ') ?> FCFA</p>
                    <p><strong>Description :</strong><br><?= nl2br(htmlspecialchars($d->description)) ?></p>
                    <a href="?page=ajoutreservationdestination&id=<?= $d->id ?>" class="btn btn-primary mt-3">Réserver cette destination</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
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