<div class="container" style="margin-top: 150px;">
    <div class="card container col-md-12">
        <div class="card-header row bg-primary text-white">
            <h4 class="col-md-10 text-white">Edition de réservation</h4>
            <div class="col-md-2 text-end">
                <a href="?page=reservationAdmin" class="btn btn-success">Retour</a>
            </div>
        </div>
    </div> 
    <?php require_once("views/includes/getmessage.php"); ?>
    <div class="card-body">
        <div class="row ">
            <form action="" method="post">
                <div class="form-group mt-3">
                    <label for="">Date d'arrivée</label>
                    <input type="date" name="date_arrivee" class="form-control" value="<?= htmlspecialchars($r->date_arrivee) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="">Date de départ</label>
                    <input type="date" name="date_depart" class="form-control" value="<?= htmlspecialchars($r->date_depart) ?>" required>       
                </div>
                <div class="form-group mt-3">
                    <label for="">Nombre de nuits</label>
                    <input type="number" name="nombre_nuits" class="form-control" value="<?= htmlspecialchars($r->nombre_nuits) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="">Nombre de personnes</label>
                    <input type="number" name="nombre_personnes" class="form-control" value="<?= htmlspecialchars($r->nombre_personnes) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="">Demandes spéciales</label>    
                    <textarea name="demandes_speciales" class="form-control" rows="3"><?= htmlspecialchars($r->demandes_speciales) ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="">Méthode de paiement</label>
                    <select name="methode_paiement" class="form-control" required>
                        <option value="Carte de crédit" <?= $r->methode_paiement == 'Carte de crédit' ? 'selected' : '' ?>>Carte de crédit</option>
                        <option value="Virement bancaire" <?= $r->methode_paiement == 'Virement bancaire' ? 'selected' : '' ?>>Virement bancaire</option>
                        <option value="Espèces" <?= $r->methode_paiement == 'Espèces' ? 'selected' : '' ?>>Espèces</option>
                        <option value="Chèque" <?= $r->methode_paiement == 'Chèque' ? 'selected' : '' ?>>Chèque</option>
                    </select>
                </div>
                <div class="form-group mt-3">   
                    <label for="">Date de réservation</label>
                    <input type="date" name="date_reservation" class="form-control" value="<?= htmlspecialchars($r->date_reservation) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="">Prix</label>
                    <input type="number" name="prix" class="form-control" value="<?= htmlspecialchars($r->prix) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="">Client</label>
                    <select name="client_id" class="form-control" required>
                        <?php foreach ($clients as $c): ?>
                            <option value="<?= htmlspecialchars($c->id) ?>" <?= $c->id == $r->client_id ? 'selected' : '' ?>>
                                <?= htmlspecialchars($c->prenom . ' ' . $c->nom) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="">Chambre</label>
                    <select name="chambre_id" class="form-control" required>
                        <?php foreach ($chambres as $ch): ?>
                            <option value="<?= htmlspecialchars($ch->id) ?>" <?= $ch->id == $r->chambre_id ? 'selected' : '' ?>>
                                <?= htmlspecialchars($ch->type) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="">Statut de la réservation</label>
                    <select name="actions" class="form-control" required>
                        <option value="0" <?= $r->actions == 0 ? 'selected' : '' ?>>En attente</option>
                        <option value="1" <?= $r->actions == 1 ? 'selected' : '' ?>>Confirmée</option>
                        <option value="2" <?= $r->actions == 2 ? 'selected' : '' ?>>Annulée</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" name="modifier" class="btn btn-outline-warning">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe Start -->
  <div class="container-fluid subscribe py-5" style="margin-top: 200px;">
    <div class="container text-center py-5">
      <div class="mx-auto text-center" style="max-width: 900px;">
        <h5 class="subscribe-title px-3">S'inscrire</h5>
        <h1 class="text-white mb-4">Notre infolettre</h1>
        <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.</p>
          <div class="position-relative mx-auto">
            <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
            <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">S'inscrire</button>
          </div>
      </div>
    </div>
  </div>
<!-- Subscribe End -->


 