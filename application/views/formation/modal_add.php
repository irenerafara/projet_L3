<div class="modal" id="addFormationModal">
  <div class="modal-dialog">
    <form id = "form-save-formation" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter formation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDFormation" name ="IDFormation">
        <!-- Modal body -->
        <div class="modal-body">
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
              <label class = "col-sm-6" for="DateDebutFormation">Date Début</label>
              <input type="date" class="form-control" id="DateDebutFormation" name="DateDebutFormation" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateFinFormation">Date Fin</label>
              <input type="date" class="form-control" id="DateFinFormation" name ="DateFinFormation" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MotifMissionFormation">Motif</label>
              <input type="text" class="form-control" id="MotifMissionFormation" name ="MotifMissionFormation" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DetailFormation">Détail</label>
              <input type="text" class="form-control" id="DetailFormation" name="DetailFormation" placeholder="" required>
          </div>
        
           <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit"  class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>