<div class="modal" id="addCommuneModal">
  <div class="modal-dialog">
    <form id = "form-save-commune" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter commune</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDCommune" name = "IDCommune">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
            <label class = "col-sm-6" for="IDRegion">Région</label>
            <select class="form-control" validation-type = "region" id="IDRegion" name="IDRegion" required>
              <?php foreach($regions as $region){
              extract($region); ?>
              <option  value = "<?php echo $IDRegion; ?>">
                <?php echo $NomRegion; ?>
              </option>
              <?php } ?>
            </select>
          </div>
         
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomCommune">Nom commune</label>
              <input type="text" class="form-control"validation-type = "nomcom" id="NomCommune" name="NomCommune" aria-describedby="NomHelp" placeholder=""required>
          </div>
         
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomMaire">Nom maire</label>
              <input type="text" class="form-control" validation-type = "nom" id="NomMaire" name = "NomMaire" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrenomMaire">Prenom Maire</label>
              <input type="text" class="form-control" validation-type = "prenom" id="PrenomMaire" name = "PrenomMaire" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactMaire">Contact Maire</label>
              <input type="text" class="form-control" validation-type = "contact" id="ContactMaire" name = "ContactMaire" placeholder="" required>
              
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