<div class="container" style="margin-top: 150px;">
    <div class="card container col-md-12">
        <div class="card-header row bg-primary text-white">
            <h4 class="col-md-10 text-white">Listes des réservations</h4>
        </div>
    </div> 
    <?php require_once("views/includes/getmessage.php"); ?>
    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>Chambre</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Adresse e-mail</th>
                    <th>Date d'arrivée</th>
                    <th>Date de départ</th>
                    <th>Nombre de nuits</th>
                    <th>Nombre de personnes</th>
                    <th>Demandes spéciales</th>
                    <th>Prix</th>
                    <th>Méthode de paiement</th>
                    <th>Statuts</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($reservations as $r): ?>
                <tr>
                    <td><?= htmlspecialchars($r->chambre_id) ?></td>
                    <td><?= htmlspecialchars($r->client_prenom) ?></td>
                    <td><?= htmlspecialchars($r->client_nom) ?></td>
                    <td><?= htmlspecialchars($r->email) ?></td>
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
                    <td>
                        <?php if ($r->actions == 0): ?>
                        <a href="?page=reservationAdmin&type=confirmer&id=<?= $r->id ?>" class="btn btn-success btn-sm" title="Confirmer"><i class="fa fa-check"></i></a>
                        <a href="?page=reservationAdmin&type=annuler&id=<?= $r->id ?>" class="btn btn-danger btn-sm" title="Annuler"><i class="fa fa-times"></i></a>
                        <?php endif; ?>
                        <a href="?page=reservationAdmin&type=edit&id=<?= $r->id ?>" title="Editer" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
