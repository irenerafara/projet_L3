<div class="modal" id="addComptoir1Modal">
  <div class="modal-dialog">
    <form id = "form-add-comptoir1" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter comptoir de fonte</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDComptoirDeFonte" name = "IDComptoirDeFonte">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomSocieteComptoirDeFonte">Nom société</label>
              <input type="text" class="form-control" id="NomSocieteComptoirDeFonte" name = "NomSocieteComptoirDeFonte" aria-describedby="NomHelp" placeholder="nom">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MandataireComptoirDeFonte">Mandataire</label>
              <input type="text" class="form-control" id="MandataireComptoirDeFonte" name = "MandataireComptoirDeFonte" placeholder="mandataire">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactComptoirDeFonte">Contact</label>
              <input type="text" class="form-control" id="ContactComptoirDeFonte" name = "ContactComptoirDeFonte" placeholder="contact">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseSiegeSocialeComptoirDeFonte">Adresse</label>
              <input type="text" class="form-control" id="AdresseSiegeSocialeComptoirDeFonte" name = "AdresseSiegeSocialeComptoirDeFonte" placeholder="adresse">
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NumInscriptionComptoirDeFonte">Numéro</label>
              <input type="text" class="form-control" id="NumInscriptionComptoirDeFonte" name ="NumInscriptionComptoirDeFonte" placeholder="numero">
          </div>
        <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateAgrementComptoirDeFonte">Date agrement</label>
              <input type="text" class="form-control" id="DateAgrementComptoirDeFonte" name = "DateAgrementComptoirDeFonte" placeholder="date">
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