

<!-- Blog Admin Panel -->
 <?php require_once("views/includes/entete.php"); ?>
<div class="container" style="margin-top: 150px;">
    <div class="card container col-md-8">
        <div class="card-header row bg-primary text-white">
            <h4 class="col-md-10 text-white mb-0"><?= $titre ?></h4>
            <div class="col-md-2 text-end">
                <?php if (isset($_GET["type"])): ?>
                    <a href="?page=blogAdmin" class="btn btn-success">Retour</a>
                <?php else: ?>
                    <a href="?page=blogAdmin&type=add" class="btn btn-success">Ajouter</a>
                <?php endif; ?>
            </div>
        </div> 
        <div class="card-body"> 
            <?php if (isset($_GET["type"])): ?>
            <?php require_once("views/ajoutblog.php"); ?>
            <?php else: ?>
            <table id="myTable" class="table table-bordered table-striped table-hover align-middle text-center"> 
            <?php require_once("views/includes/getmessage.php"); ?>

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogs as $b): ?>
                    <tr>
                        <td><?= $b->id ?></td>
                        <td><img src="images/<?= $b->image ?>" alt="<?= $b->titre ?>" class="img-thumbnail" style="width: 100px;"></td>
                        <td><?= $b->titre ?></td>
                        <td><?= $b->auteur ?></td>
                        <td><?= substr($b->description, 0, 50) . '...' ?></td>
                        <td><?= date("d-m-Y", strtotime($b->date)) ?></td>
                        <td>
                            <a href="?page=blogAdmin&type=edit&id=<?= $b->id ?>" class="btn btn-primary">Modifier</a>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal<?= $b->id ?>" href="" class="btn btn-danger btn-sm">Supprimer</a>

                            <!-- Modal de confirmation -->
                            <div class="modal fade" id="exampleModal<?= $b->id ?>" tabindex="-1" aria-labelledby="modalLabel<?= $b->id ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel<?= $b->id ?>">Confirmation de suppression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer le blog <strong><?= htmlspecialchars($b->titre) ?></strong> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                            <a href="?page=blogAdmin&idblogs=<?= $b->id ?>" class="btn btn-danger">Oui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>                                                               
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>
