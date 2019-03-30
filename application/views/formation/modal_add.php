<div class="modal" id="addFormationModal">
  <div class="modal-dialog">
    <form id = "form-add-formation" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter formation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDFormation" name = "IDFormation">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateDebutFormation">Date Début</label>
              <input type="date" class="form-control" id="DateDebutFormation" name="DateDebutFormation" aria-describedby="NomHelp" placeholder="date début">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateFinFormation">Mois</label>
              <input type="text" class="form-control" id="DateFinFormation" name = "DateFinFormation" placeholder="date fin">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MotifMissionFormation">Motif</label>
              <input type="text" class="form-control" id="MotifMissionFormation" name = "MotifMissionFormation" placeholder="motif">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DetailFormation">Détail</label>
              <input type="text" class="form-control" id="DetailFormation" name="DetailFormation" placeholder="détail">
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