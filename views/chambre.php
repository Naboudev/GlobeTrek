
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="margin-top: 90px;">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h3 class="text-white display-3 mb-4">Chambres</h1>
    <ol class="breadcrumb justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="?page=home">Acceuil</a></li>
      <li class="breadcrumb-item active text-white">Chambres</li>
    </ol>    
  </div>
</div>
<!-- Header End -->

<!-- Chambre Start -->
<div class="container-fluid packages py-5">
  <div class="container py-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
      <h5 class="section-title px-3">Chambres</h5>
      <h1 class="mb-0">Chambres Disponibles</h1>
    </div>
    <div class="row g-4">
      <?php foreach ($chambres as $c): ?>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="images/<?= htmlspecialchars($c->image) ?>" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;" alt="Image de <?= htmlspecialchars($c->nom) ?>">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= htmlspecialchars($c->nom) ?></h5>
            <p class="text-primary fw-bold"><?= number_format($c->prix, 0, ',', ' ') ?> FCFA <small>/jour</small></p>
            <?php $dateDep = dateDepart($c->id); if ($c->disponible): ?>
              <a href="?page=reservation&id=<?= $c->id ?>" class="btn btn-success mb-2">Réserver cette chambre</a>
            <?php else: ?>
              <a href="#" class="btn btn-danger mb-2">Occupée <br> jusqu'à <br> <?= $dateDep ? date("d/m/Y", strtotime($dateDep)) : 'date inconnue' ?></a>
            <?php endif; ?>
            <a href="?page=detailchambre&id=<?= $c->id ?>" class="btn btn-primary mt-auto">Voir plus →</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Chambre End -->

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


 