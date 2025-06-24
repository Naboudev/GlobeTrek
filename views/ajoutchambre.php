<div class="card container col-md-8" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Formulaire d'<?= isset($c) ? 'édition' : 'ajout' ?> Chambre</h3>
        <div class="col-md-3 text-end">
            <a href="?page=chambreAdmin" class="btn btn-success">Retour</a>
        </div>
    </div>
    <div class="card-body"> 
        <?php require_once("views/includes/getmessage.php"); ?>
        <div class="row mb-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3 form-group">
                    <label for="nom" class="form-label">Nom de la chambre</label>
                    <input type="text" value="<?= isset($c) ? $c->nom : '' ?>"  class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="type" class="form-label">Type de chambre</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="">Sélectionnez un type</option>
                        <option value="standard">Standard</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" value="<?= isset($c) ? $c->description : '' ?>" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="mb-3 form-group">
                    <label for="capacite" class="form-label">Capacité d'accueil</label>
                    <input type="number" value="<?= isset($c) ? $c->Capacité : '' ?>" class="form-control" id="capacite" name="capacite" min="1" max="10" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="number" value="<?= isset($c) ? $c->prix : '' ?>" class="form-control" id="prix" name="prix" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png,.gif">
                </div>
                <div class="mb-3 form-group">
                    <input type="radio" class="form-check-input" id="disponible" name="disponible">
                    <label class="form-check-label" for="disponible">Disponible à la réservation</label>
                </div>
                    <?php if ($_GET["type"] == "edit"): ?>
                    <div class="mb-3 form-group">
                         <button type="submit" name="modifier" class="btn btn-warning">Modifier une chambre</button>
                    </div> 
                    <?php else: ?> 
                     <div class="mb-3 form-group">
                        <button type="submit" name="ajouter" class="btn btn-primary">Ajouter une chambre</button>
                    </div>
                    <?php endif; ?>
            </form> 
        </div>  
    </div>
</div>