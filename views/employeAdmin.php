
<div class="card container col-md-12" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Liste des employés</h3>
        <div class="col-md-3 text-end">
            <a href="?page=employeAdmin&type=add" class="btn btn-success">Ajouter</a>
        </div>
    </div> 
    <div class="card-body">
        <?php require_once("views/includes/getmessage.php"); ?>
        <table id="myTable" class="table table-striped table-bordered table-hover align-middle text-center">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Adresse e-mail</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employes as $e): ?>
                <tr>
                    <td><?= htmlspecialchars($e->prenom) ?></td>
                    <td><?= htmlspecialchars($e->nom) ?></td>
                    <td><?= htmlspecialchars($e->adresse) ?></td>
                    <td><?= htmlspecialchars($e->tel) ?></td>
                    <td><?= htmlspecialchars($e->email) ?></td>
                    <td><?= htmlspecialchars($e->role) ?></td>
                    <td>
                        <a href="?page=employeAdmin&type=edit&id=<?= $e->id ?>" class="btn btn-primary btn-sm">Modifier</a>
                        <a data-bs-toggle="modal" data-bs-target="#modalEmploye<?= $e->id ?>" href="#" class="btn btn-danger btn-sm">Supprimer</a>

                        <!-- Modal de confirmation -->
                        <div class="modal fade" id="modalEmploye<?= $e->id ?>" tabindex="-1" aria-labelledby="labelEmploye<?= $e->id ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="labelEmploye<?= htmlspecialchars($e->id) ?>">Supprimer l'employé</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous sûr de vouloir supprimer l'employé <strong><?= htmlspecialchars($e->prenom) . ' ' . htmlspecialchars($e->nom) ?></strong> ?   
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                        <a href="?page=employeAdmin&idDeleting=<?= $e->id ?>" class="btn btn-danger">Oui</a>
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
