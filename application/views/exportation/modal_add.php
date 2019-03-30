<div class="modal" id="addUserModal">
  <div class="modal-dialog">
    <form id = "form-add-exportation" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter Exportation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDExportateur" name = "IDExportateur">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AnneeExportation">Année</label>
              <input type="text" class="form-control" id="AnneeExportation" name="AnneeExportation" aria-describedby="NomHelp" placeholder="année">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MoisExportation">Mois</label>
              <input type="text" class="form-control" id="MoisExportation" name = "MoisExportation" placeholder="mois">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="QuantiteExportation">Quantité</label>
              <input type="text" class="form-control" id="QuantiteExportation" name = "QuantiteExportation" placeholder="Quantite">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixUnitaireExportation">Prix unitaire</label>
              <input type="text" class="form-control" id="PrixUnitaireExportation" name="PrixUnitaireExportation" placeholder="prix unitaire">
          </div>
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixTotaleExportation">Prix totale</label>
              <input type="text" class="form-control" id="PrixTotaleExportation" name="PrixTotaleExportation" placeholder="prix totale">
          
           <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" id = "" class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>