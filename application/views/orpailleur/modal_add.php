<div class="modal" id="addOrpaillleurModal">
  <div class="modal-dialog">
    <form id = "form-add-orpailleur" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter formation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDOrpailleur" name = "IDOrpailleur">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomOrpailleur">Nom</label>
              <input type="date" class="form-control" id="NomOrpailleur" name="NomOrpailleur" aria-describedby="NomHelp" placeholder="nom">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrenomOrpailleur">Prenom</label>
              <input type="text" class="form-control" id="PrenomOrpailleur" name = "PrenomOrpailleur" placeholder="prenom">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="CINOrpailleur">CIN</label>
              <input type="text" class="form-control" id="CINOrpailleur" name = "CINOrpailleur" placeholder="cin">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="LieuCINOrpailleur">LieuCIN</label>
              <input type="text" class="form-control" id="LieuCINOrpailleur" name="LieuCINOrpailleur" placeholder="lieu">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="DuplicataCINOrpailleur">Date duplicata</label>
              <input type="text" class="form-control" id="DuplicataCINOrpailleur" name="DuplicataCINOrpailleur" placeholder="date">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactOrpailleur">Contact</label>
              <input type="text" class="form-control" id="ContactOrpailleur" name="ContactOrpailleur" placeholder="contact">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseOrpailleur">Adresse</label>
              <input type="text" class="form-control" id="AdresseOrpailleur" name="AdresseOrpailleur" placeholder="lieu">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="LieuCINOrpailleur">LieuCIN</label>
              <input type="text" class="form-control" id="LieuCINOrpailleur" name="LieuCINOrpailleur" placeholder="adresse">
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