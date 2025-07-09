
<div class="container" style="margin-top: 150px;">
  <div class="row justify-content-center" >
    <div class="col-md-6">
      <div class="card shadow-lg rounded" >
        <div class="card-header text-center">
          <ul class="nav nav-tabs card-header-tabs" id="authTabs" role="tablist">
             <li class="nav-item" role="presentation">
              <button class="nav-link active bg-primary text-white" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Connexion</button>
            </li>
          </ul>
        </div>
        <div class="card-body"> 
        <?php require_once("views/includes/getmessage.php"); ?>
          <div class="tab-content" id="authTabsContent">
            <!-- Formulaire de Connexion -->
            <div class="tab-pane fade show active" id="login" role="tabpanel">
              <form action="" method="post">
                <div class="mb-3">
                  <label for="loginEmail" class="form-label">Adresse e-mail</label>
                  <input type="email" name="email" class="form-control" id="loginEmail" required>
                </div>
                <div class="mb-3">
                  <label for="loginPassword" class="form-label">Mot de passe</label>
                  <input type="password" name="mdp" class="form-control" id="loginPassword" required>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                </div>
                <div class="col-md-4">
                  <div class="forgotton-password_info">
                    <a href="#"> Mot de passe oublié?</a>
                  </div>
                </div>
                <button type="submit" name="connecter" class="btn btn-primary w-100">Se connecter</button>
                <div class="text-center mt-3">
                  <p>Pas encore de compte? <a href="?page=inscription">Inscrivez-vous</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

