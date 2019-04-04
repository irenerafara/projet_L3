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
            <label class = "col-sm-6" for="IDCommune">Commune</label>
            <select class="form-control" id="IDCommune" name="IDCommune">
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
              <label class = "col-sm-6" for="Statut">Statut</label>
              <input type="text"  class="form-control" id="Statut" name = "Statut" placeholder="" >
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