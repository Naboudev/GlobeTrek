<div class="card-body"> 
    <div class="row mb-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3 form-group">
                <label for="texte" class="form-label">Titre</label>
                <input type="text" value="<?= isset($b) ? $b->titre : '' ?>" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="mb-3 form-group">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" value="<?= isset($b) ? $b->auteur : '' ?>" class="form-control" id="auteur" name="auteur" required>
            </div>
            <div class="mb-3 form-group">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" value="<?= isset($b) ? $b->description : '' ?>" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3 form-group">
                <label for="date" class="form-label">Date</label>
                <input type="date" value="<?= isset($b) ? $b->date : '' ?>" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3 form-group">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png,.gif">
            </div>
            <?php if ($_GET["type"] == "edit"): ?>
            <div class="mb-3 form-group">
                <button type="submit" name="ajouter" class="btn btn-primary">Ajouter un blog</button>
            </div> 
            <?php else: ?> 
            <div class="mb-3 form-group">
                <button type="submit" name="modifier" class="btn btn-warning">Modifier</button>
            </div>
            <?php endif; ?>
        </form> 
    </div>  
</div>
