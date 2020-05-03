<!DOCTYPE html>
<html>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" id="navbarre">
              <a class="navbar-brand main" href="accueil.php">Plat</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="theme.php">Fichiers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="acteur.php">Professeurs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="genre.php">Touscom</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="real.php">Mathlab</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                </ul>
                <button type="button" class="btn justify-content-center" data-toggle="modal" data-target="#myModal">
                      Se connecter
                </button>
              </div>
            </nav>

            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">        
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Connexion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>        
                  <!-- Modal body -->
                  <div class="modal-body">
                      <form action="#" > <!-- Apellle le meme fichier -->
                        <script type= "text/javascript" src="/script.js"></script>
                          <div class="col-12 border6">
                              <label for="login">Nom d'utilisateur</label>
                              <input type="text" name="login" required="true">
                  
                              <label for="password">Mot de passe</label>
                              <input type="password" name="password" required="true">
                  
                              <input type="submit" name="Valider" />        
                          </div>
                      </form> 
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn justify-content-center" data-toggle="modal" data-target="#inscription">S'inscrire</button> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="inscription">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Inscription</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">

                      <form method="post" action=adduser.php >
                        <script type= "text/javascript" src="/script.js"></script>
                          <div class="col-12 border6">

                               <label for="username">Nom d'utilisateur</label>
                              <input type="text" name="username" id="username" required="true">
                              <label for="email">Adresse mail</label>
                              <input type="text" name="email" id="email" required="true">
                  
                              <label for="password">Mot de passe</label>
                              <input type="password" name="password" id="password" required="true">
                  
                              <input type="submit" name="Valider" id="valider"




                          </div>
                      </form> 
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>

        </header>
</html>