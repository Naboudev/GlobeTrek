<div class="card container col-md-8" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Formulaire d'<?= isset($d) ? 'édition' : 'ajout' ?> d'une destination</h3>
        <div class="col-md-3 text-end">
            <a href="?page=destination" class="btn btn-success">Retour</a>
        </div>
    </div>
    <div class="card-body">
        <?php require_once "views/includes/getmessage.php"; ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" value="<?= isset($d) ? $d->nom : '' ?>" class="form-control" id="nom" name="nom" required>
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
                <textarea class="form-control" value="<?= isset($d) ? $d->description : '' ?>" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" value="<?= isset($d) ? $d->prix : '' ?>" step="100" min=0 class="form-control" id="prix" name="prix">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" 
                    accept=".jpg, .jpeg, .png, .gif, .webp" 
                    class="form-control" 
                    id="image" 
                    name="image"
                    <?= $_GET["type"] == "add" ? "required" : "" ?>>
                <?php if (isset($d) && !empty($d->image)): ?>
                    <div class="mt-2">
                        <img src="images/<?= htmlspecialchars($d->image) ?>" alt="Image actuelle" width="150">
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($_GET["type"] == "add"): ?>
            <div class="mb-3">
                <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
            </div> 
            <?php else: ?> 
            <div class="mb-3">
                <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
            </div>
            <?php endif; ?>
        </form>
    </div>
</div>