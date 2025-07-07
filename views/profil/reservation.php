<div class="card card-body mb-4">
    <h3>Mes Réservations : Chambre</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle text-center">
            <thead> 
                <tr>
                    <th>Reference</th>
                    <th>Chambre</th>
                    <th>Date d'arrivée</th>
                    <th>Date de départ</th>
                    <th>Nombre de nuits</th>
                    <th>Nombre de personnes</th>
                    <th>Demandes spéciales</th>
                    <th>Prix</th>
                    <th>Méthode de paiement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $r): ?>
                <tr>
                    <td><?= htmlspecialchars($r->reference) ?></td>
                    <td><?= htmlspecialchars($r->chambre_id) ?></td>
                    <td><?= date("d/m/Y", strtotime($r->date_arrivee)) ?></td>
                    <td><?= date("d/m/Y", strtotime($r->date_depart)) ?></td>
                    <td><?= htmlspecialchars($r->nombre_nuits) ?></td>
                    <td><?= htmlspecialchars($r->nombre_personnes) ?></td>
                    <td><?= htmlspecialchars($r->demandes_speciales) ?></td>
                    <td><?= number_format($r->prix, 0, ',', ' ') ?> FCFA</td>
                    <td><?= htmlspecialchars($r->methode_paiement) ?></td>
                    <td>
                        <?php if($r->actions == 0): ?>
                            <span class="badge bg-primary">En attente</span>
                        <?php elseif($r->actions == 1): ?>
                            <span class="badge bg-success">Confirmée</span>
                        <?php elseif($r->actions == 2): ?>
                            <span class="badge bg-danger">Annulée</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>                
</div>


<!-- Table Réservations Start -->
<div class="card card-body mb-4">
    <h3>Mes Réservations : Destination</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle text-center">
            <thead> 
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date et Heure</th>
                    <th>Destination</th>
                    <th>Pays de Départ</th>
                    <th>Personnes</th>
                    <th>Enfants</th>
                    <th>Demande Spéciale</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Seynabou Sarr</td>
                    <td>seyna@example.com</td>
                    <td>25/06/2025 10:00</td>
                    <td>Maroc</td>
                    <td>Sénégal</td>
                    <td>2</td>
                    <td>1</td>
                    <td>Chambre avec vue sur mer</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ali Diop</td>
                    <td>ali.d@example.com</td>
                    <td>26/06/2025 14:30</td>
                    <td>France</td>
                    <td>Mali</td>
                    <td>3</td>
                    <td>0</td>
                    <td>Transport inclus</td>
                    <td></td>
                </tr>
                <!-- Ajoutez plus de lignes ici dynamiquement avec PHP/MySQL -->
            </tbody>
        </table>
    </div>
</div>
<!-- Table Réservations End -->
