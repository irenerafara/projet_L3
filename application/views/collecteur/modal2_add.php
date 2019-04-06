<div class="modal" id="addCollecteurCat2Modal">
  <div class="modal-dialog">
    <form id = "form-save-collecteurcat2" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter collecteur catégorie1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDCollecteurCat2" name = "IDCollecteurCat2">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomCollecteurCat2">Nom</label>
              <input type="text" class="form-control" validation-type = "nom" id="NomCollecteurCat2" name="NomCollecteurCat2" aria-describedby="NomHelp" placeholder=""required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrenomCollecteurCat2">Prénom</label>
              <input type="text" class="form-control" validation-type = "prenom" id="PrenomCollecteurCat2" name = "PrenomCollecteurCat2" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="CINCollecteurCat2">CIN</label>
              <input type="text" class="form-control" validation-type = "cin" id="CINCollecteurCat2" name = "CINCollecteurCat2" placeholder="" required>
              <small class = "form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="LieuCINCollecteurCat2">Lieu CIN</label>
              <input type="text" class="form-control" validation-type = "lieu" id="LieuCINCollecteurCat2" name="LieuCINCollecteurCat2" placeholder="" required>
          </div>
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateCINCollecteurCat2">Date CIN</label>
              <input type="date" class="form-control" validation-type = "date" id="DateCINCollecteurCat2" name="DateCINCollecteurCat2" placeholder=""required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DuplicataCINCollecteurCat2">Duplicata</label>
              <input type="date" class="form-control"validation-type = "duplicata" id="DuplicataCINCollecteurCat2" name="DuplicataCINCollecteurCat2" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactCollecteurCat2">Contact</label>
              <input type="text" class="form-control" validation-type = "contact" id="ContactCollecteurCat2" name="ContactCollecteurCat2" placeholder=""required>
              <small class = "form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseCollecteurCat2">Adresse</label>
              <input type="text" class="form-control" validation-type = "adresse"id="AdresseCollecteurCat2" name="AdresseCollecteurCat2" placeholder="" required>
          </div>
          
           <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" id = "" class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>