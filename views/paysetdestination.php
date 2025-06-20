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
<!-- Destination Start -->
<div class="container-fluid gallary py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Destinations</h5>
        <h1 class="mb-4">Destinations Populaires</h1>
        <p class="mb-0">Explorez les plus belles destinations à travers le monde.</p>
    </div>
    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <?php $first = true; foreach ($pays as $p): ?>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill <?= $first ? 'active' : '' ?>" data-bs-toggle="pill" href="#tab-<?= $p['id'] ?>">
                        <span class="text-dark" style="width: 150px;"><?= $p["nom"] ?></span>
                    </a>
                </li>
            <?php $first = false; endforeach; ?>
        </ul>
        <div class="tab-content">
            <?php 
            $first = true;
            foreach ($pays as $p): ?>
                <div id="tab-<?= $p['id'] ?>" class="tab-pane fade <?= $first ? 'show active' : '' ?> p-0">
                    <div class="row g-4">
                        <?php foreach ($destinations as $d): ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="national-item">
                                    <img src="images/<?= $d->image ?>" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="national-content">
                                        <div class="national-info">
                                            <h5 class="text-uppercase mb-2"><?= $d->nom ?></h5>
                                            <a href="#" class="btn-hover">Réservation<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
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

        <!-- Destination End -->

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