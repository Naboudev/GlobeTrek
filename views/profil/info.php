<div class="card card-body mb-4">
    <h3 class="">Mes informations</h3>
    <form action="" method="post">
        <div class="row mt-4">
            <div class="form-group col-md-6 mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $_SESSION["user"]->prenom ?>" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= $_SESSION["user"]->nom ?>" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="Adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $_SESSION["user"]->adresse ?>" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="tel" name="tel" value="<?= $_SESSION["user"]->tel ?>" required>
            </div>
            <div class="form-group col-md-12 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION["user"]->email ?>" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <button type="submit" name="modifier" class="btn btn-outline-warning">Modifier</button>
            </div> 
        </div> 
    </form>
</div>