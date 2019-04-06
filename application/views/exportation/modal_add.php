<div class="modal" id="addExportationModal">
  <div class="modal-dialog">
    <form id = "form-save-exportation" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter exportation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDExportation" name = "IDExportation">
        <!-- Modal body -->
        <div class="modal-body">
        
        <div class="form-group form-inline">
          <label class = "col-sm-6" for="TypeExportateur">Type exportateur</label>
          <select class="form-control" id="TypeExportateur" name = "TypeExportateur">
              <option value = "1">Exportateur</option>
              <option value = "2">Comptoir de fonte</option>
              <option value = "3">Comptoir commerciale</option>
              <option value = "4">Collecteur catégorie2</option>
          </select>
        </div>
        <div class="form-group form-inline">
          <label class = "col-sm-6" for="IDExportateur">Exportateur</label>
          <select class="form-control" id="IDExportateur" name = "IDExportateur" required>
            
            </select>
        </div>
        <div class="form-group form-inline">
              <label class = "col-sm-6" for="AnneeExportation">Année</label>
              <input type='number' class="form-control" id="AnneeExportation" name = "AnneeExportation" required/>
              <small class="form-text text-muted error"></small>
        </div>
        <div class="form-group form-inline">
              <label class = "col-sm-6" for="MoisExportation">Mois</label>
              <select class="form-control" id="MoisExportation" name = "MoisExportation">
                  <option value = "01">Janvier</option>
                  <option value = "02">Février</option>
                  <option value = "03">Mars</option>
                  <option value = "04">Avril</option>
                  <option value = "05">Mai</option>
                  <option value = "06">Juin</option>
                  <option value = "07">Juillet</option>
                  <option value = "08">Aout</option>
                  <option value = "09">Septembre</option>
                  <option value = "10">Octobre</option>
                  <option value = "11">Novembre</option>
                  <option value = "12">Décembre</option>
              </select>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="QuantiteExportation">Quantité (kg)</label>
              <input type="number" step="0.01" class="form-control" id="QuantiteExportation" name = "QuantiteExportation" placeholder="" required>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixUnitaireExportation">Prix unitaire (Ariary/g)</label>
              <input type="number" step="0.01" class="form-control" id="PrixUnitaireExportation" name="PrixUnitaireExportation" placeholder="" required>
          </div>
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixTotaleExportation">Prix totale (Ariary)</label>
              <input type="number" step="0.01" class="form-control" id="PrixTotaleExportation" name="PrixTotaleExportation" placeholder="" required>
          </div>
           <!-- Modal footer -->
        <div class="modal-footer" style = "width: 100%">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" id = "" class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>