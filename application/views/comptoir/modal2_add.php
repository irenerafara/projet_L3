<div class="modal" id="addComptoirCommModal">
  <div class="modal-dialog">
    <form id = "form-add-comptoircomm" action = "url">
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
              <input type="text" class="form-control" validation-type = "nom" id="NomSocieteComptoirComm" name = "NomSocieteComptoirComm" aria-describedby="NomHelp" placeholder="" required/>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="MandataireComptoirComm">Mandataire</label>
              <input type="text" class="form-control" validation-type = "mandataire" id="MandataireComptoirComm" name = "MandataireComptoirComm" placeholder="" required/>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="ContactComptoirComm">Contact</label>
              <input type="text" class="form-control" validation-type = "contact" id="ContactComptoirComm" name = "ContactComptoirComm" placeholder="" required/>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="AdresseSiegeSocialeComptoirComm">Adresse</label>
              <input type="text" class="form-control" validation-type = "adresse" id="AdresseSiegeSocialeComptoirComm" name = "AdresseSiegeSocialeComptoirComm" placeholder="" required/>
              </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="NumInscriptionComptoirComm">Numéro</label>
              <input type="text" class="form-control" validation-type = "num" id="NumInscriptionComptoirComm" name ="NumInscriptionComptoirComm" placeholder="" required/>
          </div>
        <div class="form-group form-inline">
              <label class = "col-sm-6" for="DateAgrementComptoirComm">Date agrement</label>
              <input type="Date" class="form-control" validation-type = "date" id="DateAgrementComptoirComm" name = "DateAgrementComptoirComm" placeholder="" required/>
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