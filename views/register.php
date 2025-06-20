<div class="container" style="margin-top: 150px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg rounded">
        <div class="card-header text-center">
          <ul class="nav nav-tabs card-header-tabs" id="authTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active bg-primary text-white" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Inscription</button>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <?php require_once("views/includes/getmessage.php"); ?>
          <div class="tab-content" id="authTabsContent">
            <!-- Formulaire d'inscription -->
            <div class="tab-pane fade show active" id="login" role="tabpanel">
              <form action="" method="post">
                <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="loginPrénom" class="form-label">Prénom</label>
                  <input type="texte" name="prenom" class="form-control" id="loginPrénom" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="loginNom" class="form-label">Nom</label>
                  <input type="texte" name="nom" class="form-control" id="loginNom" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="loginAdresse" class="form-label">Adresse</label>
                  <input type="texte" name="adresse" class="form-control" id="loginAdresse" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="loginTel" class="form-label">Tél</label>
                  <input type="texte" name="tel" class="form-control" id="loginTel" required>
                </div>
                <div class="mb-3">
                  <label for="loginEmail" class="form-label">Adresse e-mail</label>
                  <input type="email" name="email" class="form-control" id="loginEmail" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="loginPassword" class="form-label">Mot de passe</label>
                  <input type="password" name="mdp" class="form-control" id="loginPassword" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="loginPassword" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" name="mdp_confirm" class="form-control" id="loginPassword" required>
                </div>
                </div>
                <button type="submit" name="inscrire" class="btn btn-primary w-100">S'inscrire</button>
                <div class="text-center mt-3">
                  <p>Déjà inscrit? <a href="?page=connexion">Connectez-vous</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
