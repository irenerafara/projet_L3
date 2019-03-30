<div class="modal" id="addComptoirModal1">
  <div class="modal-dialog">
    <form id = "form-add-comptoir1" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter comptoir commerciale</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDComptoirComm" name = "IDComptoirComm">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NomSocieteComptoirComm">Nom société</label>
              <input type="text" class="form-control" id="NomSocieteComptoirComm" name = "NomSocieteComptoirComm" aria-describedby="NomHelp" placeholder="nom societe">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MandataireComptoirComm">Mandataire</label>
              <input type="text" class="form-control" id="MandataireComptoirComm" name = "MandataireComptoirComm" placeholder="mandataire">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactComptoirComm">Contact</label>
              <input type="text" class="form-control" id="ContactComptoirComm" name = "ContactComptoirComm" placeholder="contact">
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseSiegeSocialeComptoirComm">Adresse</label>
              <input type="text" class="form-control" id="AdresseSiegeSocialeComptoirComm" name = "AdresseSiegeSocialeComptoirCommm" placeholder="adresse">
          
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NumInscriptionComptoirDeFonte">Numéro</label>
              <input type="text" class="form-control" id="NumInscriptionComptoirComm" name ="NumInscriptionComptoirCommm" placeholder="numero">
          </div>
        <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateAgrementComptoirComm">Date agrement</label>
              <input type="password" class="form-control" id="DateAgrementComptoirCommm" name = "DateAgrementComptoirCommm" placeholder="date">
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