<div class="modal" id="addUserModal">
  <div class="modal-dialog">
    <form id = "form-add-user" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter utilisateur</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDUtilisateur" name = "IDUtilisateur">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomUtilisateur">Nom utilisateur</label>
              <input type="text" class="form-control" id="NomUtilisateur" name = "NomUtilisateur" aria-describedby="NomHelp" placeholder="nom" required>
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrenomUtilisateur">Prenom Utilisateur</label>
              <input type="text" class="form-control" id="PrenomUtilisateur" name = "PrenomUtilisateur" placeholder="prenom" required>
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseUtilisateur">Adresse Utilisateur</label>
              <input type="text" class="form-control" id="AdresseUtilisateur" name = "AdresseUtilisateur" placeholder="adresse" required>
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactUtilisateur">Contact Utilisateur</label>
              <input type="text" validation-type = "phone-number" class="form-control" id="ContactUtilisateur" name = "ContactUtilisateur" placeholder="contact" required>
              <small class="form-text text-muted error"></small>
          </div>
        <div class="form-group form-inline">
              <label class = "col-sm-6" for="TypeUtilisateur">Type Utilisateur</label>
              <select class="form-control" id="TypeUtilisateur" name = "TypeUtilisateur">
                  <option value = "A">Administrateur</option>
                  <option value = "C">Comptable</option>
                  <option value = "F">Administrative et Finance</option>
                  <option value = "T">Technicien</option>
              </select>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="EmailUtilisateur">Email Utilisateur</label>
              <input type="email" class="form-control" id="EmailUtilisateur" name ="EmailUtilisateur" placeholder="email" required>
              <small class="form-text text-muted error"></small>
          </div>
        <div class="form-group form-inline">
              <label class = "col-sm-6" for="MotDePasseUtilisateur">Mot de passe utilisateur</label>
              <input type="password" class="form-control" id="MotDePasseUtilisateur" name = "MotDePasseUtilisateur" placeholder="Password">
              <small class="form-text text-muted error"></small>
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>