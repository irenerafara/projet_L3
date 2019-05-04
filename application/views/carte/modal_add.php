<div class="modal" id="addCarteModal">
  <div class="modal-dialog">
    <form id = "form-save-carte" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter carte</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDCarte" name = "IDCarte">
        <!-- Modal body -->
        <div class="modal-body">
        <div class="form-group form-inline">
          <label class = "col-sm-6" for="TypeCollecteurCat1">Type client </label>
          <select class="form-control" id="TypeCollecteurCat1" name = "TypeCollecteurCat1">
          
              <option value = "1">Collecteur catégorie 1</option>
              <option value = "2">Collecteur catégorie 2</option>
              <option value = "3">Comptoir de fonte</option>
              <option value = "4">Comptoir commerciale</option>
              <option value = "5">Orpailleur</option>
          </select>
        </div>
        <div class="form-group form-inline">
          <label class = "col-sm-6" for="IDCollecteurCat1">Client</label>
          <select class="form-control" id="IDCollecteurCat1" name = "IDCollecteurCat1" required>
            
            </select>
        </div>
        <div class="form-group form-inline">
            <label class = "col-sm-6" for="IDCommune">Commune</label>
            <select class="form-control" validation-type = "commune" id="IDCommune" name="IDCommune" required>
              <?php foreach($communes as $commune){
              extract($commune); ?>
              <option  value = "<?php echo $IDCommune; ?>">
                <?php echo $NomCommune; ?>
              </option>
              <?php } ?>
            </select>
          </div>
        
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NumCarte">Numéro carte</label>
              <input type="text" class="form-control" id="NumCarte" name = "NumCarte" aria-describedby="NomHelp" placeholder="">
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateDemandeCarte">Date demande</label>
              <input type="date" class="form-control" id="DateDemandeCarte" name = "DateDemandeCarte" placeholder="">
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateObtentionCarte">Date obtention</label>
              <input type="date" class="form-control" id="DateObtentionCarte" name = "DateObtentionCarte" placeholder="" >
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateExpirationCarte">Date expiration</label>
              <input type="date"  class="form-control" id="DateExpirationCarte" name = "DateExpirationCarte" placeholder=""> 
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="StatutCarte">Statut</label>
              <input type="text"  class="form-control" id="StatutCarte" name = "StatutCarte" placeholder="" required>
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