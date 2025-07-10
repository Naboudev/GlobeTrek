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
                    <td><?= substr(htmlspecialchars($r->chambre_nom), 0, 20) ?>...</td>
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
                    <th>Nom Complet</th>
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
                <?php foreach($reservationspays as $r) : ?>
                <tr>
                    <td>1</td>
                    <td><?= htmlspecialchars($_SESSION['user']->nom) ?></td>
                    <td><?= htmlspecialchars($_SESSION['user']->email) ?></td>
                    <td><?= date("d/m/Y H:i", strtotime($r->date_heure)) ?></td>
                    <td><?= htmlspecialchars($r->destination) ?></td>
                    <td><?= htmlspecialchars($r->pays_depart) ?></td>
                    <td class="text-center"><?= (int)$r->personnes ?></td>
                    <td class="text-center"><?= (int)$r->enfants ?></td>
                    <td><?= nl2br(htmlspecialchars($r->demandes_speciales)) ?></td>
                    <td>
                        <a href="?page=detailReservation&id=<?= $r->id ?>" class="btn btn-sm btn-info">Voir</a>
                        <a href="?page=supprimerReservation&id=<?= $r->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette réservation ?')">Supprimer</a>
                    </td>
                </tr>
                    <?php endforeach; ?>
                <!-- Ajoutez plus de lignes ici dynamiquement avec PHP/MySQL -->
            </tbody>
        </table>
    </div>
</div>
<!-- Table Réservations End -->
