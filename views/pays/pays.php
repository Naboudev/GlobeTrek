<div class="container" style="margin-top: 150px;">
    <div class="card container col-md-8">
        <div class="card-header row bg-primary text-white">
            <h4 class="col-md-10 text-white">Listes des pays</h4>
            <div class="col-md-2 text-end">
                <a href="?page=pays&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div> 
        <?php require_once("views/includes/getmessage.php"); ?>
        <div class="card-body">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Nom du pays</th>
                        <!-- <th>Image</th> -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    <?php $i = 1; foreach ($pays as $p): ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= htmlspecialchars($p["nom"]) ?></td>
        <td>
            <a href="?page=pays&type=edit&id=<?= $p['id'] ?>" class="btn btn-primary btn-sm">Modifier</a>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal<?= $p['id'] ?>" href="#" class="btn btn-danger btn-sm">Supprimer</a>

            <!-- Modal de confirmation -->
            <div class="modal fade" id="exampleModal<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalLabel<?= $p['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel<?= $p['id'] ?>">Confirmation de suppression</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                            Êtes-vous sûr de vouloir supprimer le pays <strong><?= htmlspecialchars($p['nom']) ?></strong> ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                            <a href="?page=pays&idpays=<?= $p['id'] ?>" class="btn btn-danger">Oui</a>
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
</div>