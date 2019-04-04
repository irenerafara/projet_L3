<div class="modal" id="addCollecteurCat1Modal">
  <div class="modal-dialog">
    <form id = "form-save-collecteurcat1" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter collecteur catégorie1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDCollecteurCat1" name = "IDCollecteurCat1">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomCollecteurCat1">Nom</label>
              <input type="text" class="form-control" validation-type = "nom" id="NomCollecteurCat1" name="NomCollecteurCat1" aria-describedby="NomHelp" placeholder=""required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrenomCollecteurCat1">Prénom</label>
              <input type="text" class="form-control" validation-type = "prenonom" id="PrenomCollecteurCat1" name = "PrenomCollecteurCat1" placeholder=""required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="CINCollecteurCat1">CIN</label>
              <input type="text" class="form-control" validation-type = "cin" id="CINCollecteurCat1" name = "CINCollecteurCat1" placeholder="" required>
              <small class = "form-text text-muted error"></small>
          </div>
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="LieuCINCollecteurCat1">Lieu CIN</label>
              <input type="text" class="form-control" validation-type = "lieu" id="LieuCINCollecteurCat1" name="LieuCINCollecteurCat1" placeholder="" required>
          </div>
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateCINCollecteurCat1">Date CIN</label>
              <input type="date" class="form-control" validation-type = "date" id="DateCINCollecteurCat1" name="DateCINCollecteurCat1" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DuplicataCINCollecteurCat1">Duplicata</label>
              <input type="date" class="form-control" validation-type = "duplicata" id="DuplicataCINCollecteurCat1" name="DuplicataCINCollecteurCat1" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactCollecteurCat1">Contact</label>
              <input type="text" class="form-control" validation-type = "contact" id="ContactCollecteurCat1" name="ContactCollecteurCat1" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseCollecteurCat1">Adresse</label>
              <input type="text" class="form-control" validation-type = "adresse" id="AdresseCollecteurCat1" name="AdresseCollecteurCat1" placeholder="" required>
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