<div class="card container col-md-8" style="margin-top: 150px;">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-9 text-white">Formulaire d'<?= isset($e) ? 'édition' : 'ajout' ?> d'employé</h3>
        <div class="col-md-3 text-end">
            <a href="?page=employeAdmin" class="btn btn-success">Retour</a>
        </div>
    </div>
    <div class="card-body"> 
        <?php require_once("views/includes/getmessage.php"); ?>
        <div class="row mb-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3 form-group">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" value="<?= isset($e) ? $e->prenom : '' ?>"  class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" value="<?= isset($e) ? $e->nom : '' ?>"  class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" value="<?= isset($e) ? $e->adresse : '' ?>" class="form-control" id="adresse" name="adresse" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="tel" class="form-label">Téléphone</label>
                    <input type="tel" value="<?= isset($e) ? $e->tel : '' ?>" class="form-control" id="tel" name="tel" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" value="<?= isset($e) ? $e->email : '' ?>" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="">Sélectionnez un rôle</option>
                        <option value="admin">Admin</option>
                        <option value="employe">Employé</option>
                    </select>
                </div>
                <?php if ($_GET["type"] == "add"): ?>
                <div class="mb-3 form-group">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" required>
                </div>
                <?php endif; ?>
                <?php if ($_GET["type"] == "edit"): ?>
                <div class="mb-3 form-group">
                        <button type="submit" name="modifier" class="btn btn-warning">Modifier un employé</button>
                </div> 
                <?php else: ?> 
                    <div class="mb-3 form-group">
                    <button type="submit" name="ajouter" class="btn btn-primary">Ajouter un employé</button>
                </div>
                <?php endif; ?>
            </form> 
        </div>  
    </div>
</div>