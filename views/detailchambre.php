<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb" style="margin-top: 90px;">
      <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Details de la Chambre : <strong><?= $c->nom ?></strong></h1>
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="?page=chambre">Chambre</a></li>
          <li class="breadcrumb-item active text-white"><?= $c->nom ?></li>
        </ol>    
      </div>
    </div>
<!-- Header End -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Détails de la Chambre</h5>
            <h1 class="mb-0"><?= htmlspecialchars($c->nom) ?></h1>
        </div>
        <div class="container mt-5">
            <div class="card mb-3 shadow-lg">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="images/<?= htmlspecialchars($c->image) ?>" class="img-fluid rounded-start" alt="Chambre d'hôtel">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h3 class="card-title"><?= htmlspecialchars($c->nom) ?></h3>
                            <p class="text-muted">Hôtel Paradis, Dakar</p>
                            <p class="card-text"><?= nl2br(htmlspecialchars($c->description)) ?></p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Capacité : <?= htmlspecialchars($c->capacite ?? "Non précisée") ?></li>
                                <li class="list-group-item">Vue : <?= htmlspecialchars($c->vue ?? "Non précisée") ?></li>
                            </ul>
                            <h4 class="text-primary mb-3"><?= number_format($c->prix, 0, ',', ' ') ?> FCFA</h4>
                            <p class="text-success fw-bold">Disponible</p>
                            <a href="?page=reservation&id=<?= $c->id ?>" class="btn btn-primary btn-lg">Réserver cette chambre</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>


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
