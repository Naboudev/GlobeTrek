<div class="container" style="margin-top: 150px;">
    <div class="card container col-md-12">
        <div class="card-header row bg-primary text-white">
            <h4 class="col-md-10 text-white">Edition de réservation</h4>
            <div class="col-md-2 text-end">
                <a href="?page=reservationpaysAdmin" class="btn btn-success">Retour</a>
            </div>
        </div>
    </div> 
    <?php require_once("views/includes/getmessage.php"); ?>
    <div class="card-body">
        <div class="row ">
            <form action="" method="post">
                <div class="form-group mt-3">
                    <label for="nom">Nom Complet</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="<?= htmlspecialchars($r->nom) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($r->email) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="date_heure">Date & Heure</label>
                    <input type="datetime-local" name="date_heure" id="date_heure" class="form-control" value="<?= htmlspecialchars($r->date_heure) ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination" class="form-control" required>
                        <?php foreach ($destinations as $d): ?>
                            <option value="<?= $d->id ?>" <?= $d->id == $r->destination ? 'selected' : '' ?>>
                                <?= htmlspecialchars($d->nom) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>   
                </div>
                <div class="form-group mt-3">
                    <label for="pays_depart">Pays de départ</label>
                    <select name="pays_depart" id="pays_depart" class="form-control" required>
                        <?php foreach ($pays as $p): ?>
                            <option value="<?= htmlspecialchars($p->nom) ?>" <?= $p->nom == $r->pays_depart ? 'selected' : '' ?>>
                                <?= htmlspecialchars($p->nom) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="personnes">Nombre de personnes</label>
                    <input type="number" name="personnes" id="personnes" class="form-control" value="<?= htmlspecialchars($r->personnes) ?>" min="1" required>
                </div>
                <div class="form-group mt-3">
                    <label for="enfants">Nombre d'enfants</label>
                    <input type="number" name="enfants" id="enfants" class="form-control" value="<?= htmlspecialchars($r->enfants) ?>" min="0" required>
                </div>
                <div class="form-group mt-3">
                    <label for="demandes_speciales">Demandes spéciales</label>
                    <textarea name="demandes_speciales" id="demandes_speciales" class="form-control" rows="3"><?= htmlspecialchars($r->demandes_speciales) ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="methode_paiement">Méthode de paiement</label>
                    <select name="methode_paiement" id="methode_paiement" class="form-control" required>
                        <option value="Carte de crédit" <?= $r->methode_paiement == 'Carte de crédit' ? 'selected' : '' ?>>Carte de crédit</option>
                        <option value="Virement bancaire" <?= $r->methode_paiement == 'Virement bancaire' ? 'selected' : '' ?>>Virement bancaire</option>
                        <option value="Espèces" <?= $r->methode_paiement == 'Espèces' ? 'selected' : '' ?>>Espèces</option>
                        <option value="Chèque" <?= $r->methode_paiement == 'Chèque' ? 'selected' : '' ?>>Chèque</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="statuts">Statut</label>
                    <select name="statuts" id="statuts" class="form-control" required>
                        <option value="0" <?= $r->actions == 0 ? 'selected' : '' ?>>En attente</option>
                        <option value="1" <?= $r->actions == 1 ? 'selected' : '' ?>>Confirmée</option>
                        <option value="2" <?= $r->actions == 2 ? 'selected' : '' ?>>Annulée</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" name="modifier" class="btn btn-primary">Modifier la réservation</button>
                </div>
            </form>
        </div>
    </div>
</div>