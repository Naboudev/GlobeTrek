

<!-- Blog Admin Panel -->
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
            <table class="table table-bordered table-striped">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit me-1"></i>Modifier</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash me-1"></i>Supprimer</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit me-1"></i>Modifier</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash me-1"></i>Supprimer</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>