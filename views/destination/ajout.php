<div class="card container col-md-8" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Ajouter une destination</h3>
        <div class="col-md-3 text-end">
            <a href="?page=destination" class="btn btn-success">Retour</a>
        </div>
    </div>
    <div class="card-body">
        <?php require_once "views/includes/getmessage.php"; ?>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="pays" class="form-label">Pays</label>
                    <select class="form-select" id="pays" name="pays_id" required>
                        <option value="">Veuillez sélectionner un pays</option>
                        <?php foreach ($pays as $p) : ?>
                            <option value="<?= $p["id"] ?>"><?= $p["nom"] ?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" step="100" min=0 class="form-control" id="prix" name="prix">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" accept=".jpg, .jpeg, .png, .gif, .webp" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>