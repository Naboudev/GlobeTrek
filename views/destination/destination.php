
<div class="card container col-md-10" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Liste des destinations</h3>
        <div class="col-md-3 text-end">
            <a href="?page=destination&type=add" class="btn btn-success">Ajouter</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered table-hover align-middle text-center">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Pays</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach ($destinations as $d) : ?>
                    <tr>
                        <td>
                            <img src="images/<?= $d->image ?>" alt="" height="50px" width="50px">
                        </td>
                        <td><?= $d->nom ?></td>
                        <td><?= $d->description ?></td>
                        <td><?= $d->prix ?>FCFA</td>
                        <td><?= $d->pays_id ?></td>
                        <td>
                            <a href="?page=destination&type=edit&id=<?= $d->id ?>" class="btn btn-primary btn-sm">Modifier</a>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal<?= $d->id ?>" href="#" class="btn btn-danger btn-sm">Supprimer</a>

                            <!-- Modal de confirmation -->
                            <div class="modal fade" id="exampleModal<?= $d->id ?>" tabindex="-1" aria-labelledby="modalLabel<?= $d->id ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel<?= $d->id ?>">Confirmation de suppression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer cette <strong><?= htmlspecialchars($d->nom) ?></strong> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                            <a href="?page=destination&iddestinations=<?= $d->id ?>" class="btn btn-danger">Oui</a>
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