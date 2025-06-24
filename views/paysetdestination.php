<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="margin-top: 90px;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Pays/Destinations</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="?page=home">Acceuil</a></li>
            <li class="breadcrumb-item active text-white">Pays/Destinations</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

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
<!-- End Destinations populaires -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">S'inscrire</h5>
            <h1 class="text-white mb-4">Notre infolettre</h1>
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