<div class="card card-body mb-4">
    <h3 class="">Changer mon mot de passe</h3>
    <form action="" method="post">
        <div class="row mt-4">
            <div class="form-group col-md-6 mb-3">
                <label for="actuel_mdp" class="form-label">Mot de passe actuel</label>
                <input type="password" class="form-control" id="actuel_mdp" name="actuel_mdp" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="nouveau_mdp" class="form-label">Nouveau Mot de passe</label>
                <input type="password" class="form-control" id="nouveau_mdp" name="nouveau_mdp" required>
            </div>
            <div class="form-group col-md-12 mb-3">
                <label for="confirm_mdp" class="form-label">Mot de passe de confirmation</label>
                <input type="password" class="form-control" id="confirm_mdp" name="confirm_mdp" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <button type="submit" name="editpassword" class="btn btn-outline-warning">Modifier</button>
            </div>
        </div>
    </form>
</div>