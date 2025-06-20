
<div class="card container col-md-10" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Liste des destinations</h3>
        <div class="col-md-3 text-end">
            <a href="?page=destination&type=add" class="btn btn-success">Ajouter</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
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
                            <a href="" class="btn btn-primary">Modifier</a>
                            <a href="" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>