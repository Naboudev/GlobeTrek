<!-- Table Réservations Start -->
<div class="container" style="margin-top: 150px;">
    <div class="card container col-md-12">
        <div class="card-header row bg-primary text-white">
            <h4 class="col-md-10 text-white">Listes des réservations Destinations</h4>
        </div>
    </div> 
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>#</th>
                    <th>Nom complet</th>
                    <th>Email</th>
                    <th>Date & Heure</th>
                    <th>Destination</th>
                    <th>Pays de départ</th>
                    <th>Personnes</th>
                    <th>Enfants</th>
                    <th>Demandes spéciales</th>
                    <th>Prix</th>
                    <th>Méthode paiement</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservationspays as $i => $r): ?>
                    <tr>
                        <td class="text-center"><?= $i + 1 ?></td>
                        <td><?= htmlspecialchars($r->nom) ?></td>
                        <td><?= htmlspecialchars($r->email) ?></td>
                        <td><?= htmlspecialchars($r->date_heure) ?></td>
                        <td><?= htmlspecialchars($r->destination) ?></td>
                        <td><?= htmlspecialchars($r->pays_depart) ?></td>
                        <td class="text-center"><?= (int)$r->personnes ?></td>
                        <td class="text-center"><?= (int)$r->enfants ?></td>
                        <td><?= nl2br(htmlspecialchars($r->demandes_speciales)) ?></td>
                        <td class="text-end"><?= number_format($r->prix, 0, ',', ' ') ?> FCFA</td>
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
                        <td>
                        <?php if ($r->actions == 0): ?>
                            <a href="?page=reservationpaysAdmin&type=confirmer&id=<?= $r->id ?>" class="btn btn-success btn-sm" title="Confirmer"><i class="fa fa-check"></i></a>
                            <a href="?page=reservationpaysAdmin&type=annuler&id=<?= $r->id ?>" class="btn btn-danger btn-sm" title="Annuler"><i class="fa fa-times"></i></a>
                        <?php endif; ?>
                            <a href="?page=reservationpaysAdmin&type=edit&id=<?= $r->id ?>" title="Editer" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Table Réservations End -->
