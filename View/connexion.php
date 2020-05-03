<!DOCTYPE html>
<html lang="en">
<header>

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
                  
                              <input type="submit" name="Valider" id="valider">




                      </form> 
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  </div>
       
</header>