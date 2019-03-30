<div class="modal" id="addProvinceModal">
  <div class="modal-dialog">
    <form id = "form-add-province" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter province</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDProvince" name = "IDProvince">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomProvince">Nom</label>
              <input type="date" class="form-control" id="NomProvince" name="NomProvince" aria-describedby="NomHelp" placeholder="nom">
          
        
           <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" id = "" class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>