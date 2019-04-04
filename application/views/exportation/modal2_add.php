<div class="modal" id="addExportationModal">
  <div class="modal-dialog">
    <form id = "form-save-exportation" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter Exportation mensuelle</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDExportation" name = "IDExportation">
        <!-- Modal body -->
        <div class="modal-body">
        
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MoisExportation">Mois</label>
              <select class="form-control" id="MoisExportation" name = "MoisExportation">
                  <option value = "Janvier">Janvier</option>
                  <option value = "Février">Février</option>
                  <option value = "Mars">Mars</option>
                  <option value = "Avril">Avril</option>
                  <option value = "Mai">Mai</option>
                  <option value = "Juin">Juin</option>
                  <option value = "Juillet">Juillet</option>
                  <option value = "Aout">Aout</option>
                  <option value = "Septembre">Septembre</option>
                  <option value = "Octobre">Octobre</option>
                  <option value = "Novembre">Novembre</option>
                  <option value = "Décembre">Décembre</option>
              </select>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="QuantiteExportation">Quantité</label>
              <input type="text" class="form-control" id="QuantiteExportation" name = "QuantiteExportation" placeholder="">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixUnitaireExportation">Prix unitaire</label>
              <input type="text" class="form-control" id="PrixUnitaireExportation" name="PrixUnitaireExportation" placeholder="">
          </div>
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixTotaleExportation">Prix totale</label>
              <input type="text" class="form-control" id="PrixTotaleExportation" name="PrixTotaleExportation" placeholder="">
          
           <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" id = "" class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>