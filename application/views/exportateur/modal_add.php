<div class="modal" id="addExportateurModal">
  <div class="modal-dialog">
    <form id = "form-add-exportateur" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter Exportateur</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDExportateur" name = "IDExportateur">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomSocieteExportateur">Nom société</label>
              <input type="text" class="form-control" id="NomSocieteExportateur" name="NomSocieteExportateur" aria-describedby="NomHelp" placeholder="Nom du société">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomExportateur">Nom exportateur</label>
              <input type="text" class="form-control" id="NomExportateur" name = "NomExportateur" placeholder="Nom">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrenomExportateur">Prenom</label>
              <input type="text" class="form-control" id="PrenomExportateur" name = "PrenomExportateur" placeholder="Prenom">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="StatExportateur">Stat</label>
              <input type="text" class="form-control" id="StatExportateur" name="StatExportateur" placeholder="Numero">
          </div>
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NifExportateur">Nif</label>
              <input type="text" class="form-control" id="NifExportateur" name="NifExportateur" placeholder="Nif">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="FiscalExportateur">Fiscal</label>
              <input type="text" class="form-control" id="FiscalExportateur" name="FiscalExportateur" placeholder="Fiscal">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactExportateur">Contact</label>
              <input type="text" class="form-control" id="ContactExportateur" name="ContactExportateur" placeholder="Contact">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseExportateur">Adresse</label>
              <input type="text" class="form-control" id="AdresseExportateur" name="AdresseExportateur" placeholder="Adresse">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MandataireExportateur">Mandataire</label>
              <input type="text" class="form-control" id="MandataireExportateur" name="MandataireExportateur" placeholder="Mandataire">
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