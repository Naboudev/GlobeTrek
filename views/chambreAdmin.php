
<div class="card container col-md-12" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Liste des chambres</h3>
        <div class="col-md-3 text-end">
            <a href="?page=chambreAdmin&type=add" class="btn btn-success">Ajouter</a>
        </div>
    </div> 
    <div class="card-body">
        <?php require_once("views/includes/getmessage.php"); ?>
        <table id="myTable" class="table table-striped table-bordered table-hover align-middle text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>type</th>
                    <th>Description</th>
                    <th>Capacité d'accueil</th>
                    <th>Prix</th>
                    <th>Disponible</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chambres as $c): ?>
                <tr>
                    <td><?= htmlspecialchars($c->id) ?></td>
                    <td>
                        <img src="images/<?= htmlspecialchars($c->image) ?>" alt="Image de <?= htmlspecialchars($c->nom) ?>" height="50" width="50">
                    </td>
                    <td><?= htmlspecialchars($c->nom) ?></td>
                    <td><?= htmlspecialchars($c->type) ?></td>
                    <td><?= htmlspecialchars($c->description) ?></td>
                    <td><?= htmlspecialchars($c->capacite) ?></td>
                    <td><?= number_format($c->prix, 0, ',', ' ') ?> FCFA</td>
                    <td>
                        <?php if ($c->disponible === "non"): ?>
                            <span class="badge bg-danger">Non</span>
                        <?php else: ?>
                            <span class="badge bg-success">Oui</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="?page=chambreAdmin&type=edit&id=<?= $c->id ?>" class="btn btn-primary btn-sm">Modifier</a>
                        <a data-bs-toggle="modal" data-bs-target="#modalChambre<?= $c->id ?>" href="#" class="btn btn-danger btn-sm">Supprimer</a>

                        <!-- Modal de confirmation -->
                        <div class="modal fade" id="modalChambre<?= $c->id ?>" tabindex="-1" aria-labelledby="labelChambre<?= $c->id ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="labelChambre<?= htmlspecialchars($c->id) ?>">Supprimer la chambre</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous sûr de vouloir supprimer la chambre <strong><?= htmlspecialchars($c->nom) ?></strong> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                        <a href="?page=chambreAdmin&idchambres=<?= $c->id ?>" class="btn btn-danger">Oui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
