<div class="container" style="margin-top: 150px;">
    <div class="card container col-md-8">
        <div class="card-header row bg-primary text-white">
            <h4 class="col-md-9 text-white">Formulaire d'<?= isset($p) ? 'édition' : 'ajout' ?> d'un pays</h4>
            <div class="col-md-3 text-end">
                <a href="?page=pays" class="btn btn-success">Retour</a>
            </div>
        </div>
        <div class="card-body">
        <?php require_once("views/includes/getmessage.php"); ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <p>Tous les champs avec (<span class="text-danger">*</span>) sont obligatoirs</p>
                <div class="row mb-6">
                    <div class="col-md-8">
                        <label for="nom" class="form-label">Nom du pays<span class="text-danger">*</span></label>
                        <input type="text" value="<?= isset($p) ? $p->nom : '' ?>" class="form-control" id="nom" name="nom" placeholder="Ex: Italie" required>
                     </div>
                    <!-- <div class="mb-3">
                        <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                         <input class="form-control" type="file" id="image" name="image" accept="image/*">
                    </div> -->
                    <?php if ($_GET["type"] == "add"): ?>
                    <div class="mt-5">
                         <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
                    </div> 
                    <?php else: ?> 
                     <div class="mt-5">
                        <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                    </div>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>        
</div>
