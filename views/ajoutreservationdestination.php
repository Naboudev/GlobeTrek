

<form action="" method="post">
    <div class="row g-3">
        <!-- Nom -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                <label for="nom">Nom</label>
            </div>
        </div>
        <!-- Email -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <label for="email">Email</label>
            </div>
        </div>
        <!-- Date et Heure -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="datetime-local" class="form-control" id="date_heure" name="date_heure">
                <label for="date_heure">Date et Heure</label>
            </div>
        </div>
        <!-- Destination -->
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="destination" name="destination">
                    <option value="">-- Choisir --</option>
                    <?php if (isset($destinations) && is_array($destinations)): ?>
                        <?php foreach($destinations as $d): ?>
                            <option value="<?= $d->id ?>"><?= htmlspecialchars($d->nom) ?></option>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <option disabled>Aucune destination disponible</option>
                    <?php endif; ?>
                </select>
                <label for="destination">Destination</label>
            </div>
        </div>

        <!-- Pays de Départ -->
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="pays_depart" name="pays_depart">
                    <option value="">-- Choisir --</option>
                    <?php if (isset($pays) && is_array($pays)): ?>
                        <?php foreach($pays as $p): ?>
                            <option value="<?= $p["nom"] ?>"><?= htmlspecialchars ($p["nom"]) ?></option>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <option disabled>Aucun pays disponible</option>
                    <?php endif; ?>
                </select>
                <label for="pays_depart">Pays de Départ</label>
            </div>
        </div>
        <!-- Personnes -->
        <div class="col-md-3">
            <div class="form-floating">
                <input type="number" class="form-control" id="personnes" name="personnes" min="1" placeholder="Personnes">
                <label for="personnes">Personnes</label>
            </div>
        </div>
        <!-- Enfants -->
        <div class="col-md-3">
            <div class="form-floating">
                <input type="number" class="form-control" id="enfants" name="enfants" min="0" placeholder="Enfants">
                <label for="enfants">Enfants</label>
            </div>
        </div>
        <!-- Demande Spéciale -->
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Demande Spéciale" id="demande" name="demande" style="height: 100px"></textarea>
                <label for="demande">Demande Spéciale</label>
            </div>
        </div>
        <!-- Prix -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="prix" name="prix" min="0" placeholder="Prix">
                <label for="prix">Prix</label>
            </div>
        </div> 
        <!-- Méthode de Paiement -->
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                    <option value="">-- Choisir --</option>
                    <option value="creditCard">Carte de crédit</option>
                    <option value="paypal">PayPal</option>
                    <option value="bankTransfer">Virement bancaire</option>
                    <option value="cash">Espèces</option>
                </select>
                <label for="paymentMethod" class="form-label">Méthode de paiement</label>
            </div>
        </div>
        <!-- Bouton -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100 py-3">Soumettre la Réservation</button>
        </div>
    </div>
</form>