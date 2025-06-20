<div class="card card-body mb-4">
    <h3>Mes Réservations</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
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