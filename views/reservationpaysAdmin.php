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
                        <td><?= htmlspecialchars($r->email) ?></td>
                        <td><?= htmlspecialchars($r->date_heure) ?></td>
                        <td><?= htmlspecialchars($r->destination) ?></td>
                        <td><?= htmlspecialchars($r->pays_depart) ?></td>
                        <td class="text-center"><?= (int)$r->personnes ?></td>
                        <td class="text-center"><?= (int)$r->enfants ?></td>
                        <td><?= nl2br(htmlspecialchars($r->demandes_speciales)) ?></td>
                        <td class="text-end"><?= number_format($r->prix, 0, ',', ' ') ?> FCFA</td>
                        <td><?= htmlspecialchars($r->methode_paiement) ?></td>
                        <td class="text-center">
                            <?= htmlspecialchars($r->statuts) ?>
                        </td>
                        <td class="text-center">
                            <a href="?page=detailReservation&id=<?= $r->id ?>" class="btn btn-sm btn-info">Voir</a>
                            <a href="?page=supprimerReservation&id=<?= $r->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette réservation ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Table Réservations End -->
