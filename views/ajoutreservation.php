<?php if (isset($_SESSION['user'])): ?>
    <div class="alert alert-success">
        Bienvenue, <?= htmlspecialchars($_SESSION['user']->nom) ?>! Vous pouvez réserver une chambre.
    </div>
    <div class="card container col-md-9">
        <div class="card-header bg-primary text-white">
            <h4 class="text-white">Réserver cette chambre</h4>
        </div>
        <div class="card-body">
            <?php require_once("views/includes/getmessage.php"); ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="chambre_id" class="form-label">Chambre</label>
                    <select class="form-select" id="chambre_id" name="chambre_id" required>
                        <option value="">Sélectionnez une chambre</option>
                        <?php foreach ($chambres as $c): ?>
                            <option value="<?= $c->id ?>" <?= (isset($chambre) && $chambre->id == $c->id)|| recupererLesDonneesDeLInput("chambre_id") ? 'selected' : '' ?>>
                                <?= htmlspecialchars($c->nom) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="nom" name="nom" required placeholder="Votre Nom complet">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Votre Adresse e-mail">
                </div>

                <div class="mb-3">
                    <label for="arrivalDate" class="form-label">Date d'arrivée</label>
                    <input type="date" value="<?= recupererLesDonneesDeLInput("arrivalDate") ?>" class="form-control" id="arrivalDate" name="arrivalDate" required>
                </div>

                <div class="mb-3">
                    <label for="departureDate" class="form-label">Date de départ</label>
                    <input type="date" value="<?= recupererLesDonneesDeLInput("departureDate") ?>" class="form-control" id="departureDate" name="departureDate" required>
                </div>

                <div class="mb-3">
                    <label for="nights" class="form-label">Nombre de nuits</label>
                    <input type="number" class="form-control" id="nights" name="nights" min="1" value="1" required>
                </div>

                <div class="mb-3">
                    <label for="guests" class="form-label">Nombre de personnes</label>
                    <input type="number" class="form-control" id="guests" name="guests" min="1" value="1" required>
                </div>

                <div class="mb-3">
                    <label for="specialRequests" class="form-label">Demandes spéciales</label>
                    <textarea class="form-control" id="specialRequests" name="specialRequests" rows="3" placeholder="Votre demande spéciale"></textarea>
                </div>
                <div class="mb-3">
                    <label for="prix" class="form-label">Prix de la chambre</label>
                    <input type="text" class="form-control" id="prix" name="prix" value="<?= isset($chambre) ? htmlspecialchars($chambre->prix) : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Méthode de paiement</label>
                    <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                        <option value="">Sélectionnez une méthode</option>
                        <option value="creditCard">Carte de crédit</option>
                        <option value="paypal">PayPal</option>
                        <option value="bankTransfer">Virement bancaire</option>
                        <option value="cash">Espèces</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="reservationDate" class="form-label">Date de réservation</label>
                    <input type="date" class="form-control" id="reservationDate" name="reservationDate" required placeholder="Votre Date de réservation">
                </div> 
                        
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                    <label class="form-check-label" for="terms">
                        J'accepte les <a href="#">termes et conditions</a>
                    </label>
                </div>
                
                <div class="mb-3">
                    <button type="submit" name="reserver" class="btn btn-primary">Réservez maintenant</button>
                </div>
            </form>
        </div>
    </div>
<?php else: ?>
    <div class="alert alert-warning">
        Veuillez vous connecter pour effectuer une réservation.
    </div>
<?php endif; ?>