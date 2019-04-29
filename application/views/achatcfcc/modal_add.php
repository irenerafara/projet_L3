<div class="modal" id="addachatcfccModal">
  <div class="modal-dialog">
    <form id = "form-save-achatcfcc" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter achat comptoir de fonte à comptoir_commerciale </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDAchatCfCc" name = "IDAchatCfCc">
        <!-- Modal body -->
        <div class="modal-body">
       
           
          <div class="form-group form-inline">
            <label class = "col-sm-6" for="IDComptoirDeFonte">comptoir de fonte</label>
            <select class="form-control" validation-type = "comptoirfonte" id="IDComptoirDeFonte" name="IDComptoirDeFonte" required>
              <?php foreach($comptoirfontes as $comptoirfonte)
                {
              extract($comptoirfonte); 
              ?>
              <option  value = "<?php echo $IDComptoirDeFonte; ?>">
                <?php echo $NomSocieteComptoirDeFonte; ?>
              </option>
              <?php

                }
             ?>
            </select>
          </div>
          
        <div class="form-group form-inline">
            <label class = "col-sm-6" for="IDComptoirComm">comptoir commerciale</label>
            <select class="form-control" validation-type = "IDComptoirComm" id="IDComptoirComm" name="IDComptoirComm" required>
              <?php foreach($comms as $comm)
                {
              extract($comm); 
              ?>
              <option  value = "<?php echo $IDComptoirComm; ?>">
                <?php echo $NomSocieteComptoirComm; ?>
              </option>
              <?php

                }
             ?>
            </select>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="Date">Date</label>
              <input type="date" class="form-control" id="Date" name = "Date" placeholder="" >
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="Quantite">Quantite(kg)</label>
              <input type="text"  class="form-control" id="Quantite" name = "Quantite" placeholder=""> 
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixUnitaire">Prix unitaire(Ariary/g)</label>
              <input type="text"  class="form-control" id="PrixUnitaire" name = "PrixUnitaire" placeholder="" >
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixTotale">Prix totale(Ariary)</label>
              <input type="text"  class="form-control" id="PrixTotale" name = "PrixTotale" placeholder="" >
              <small class="form-text text-muted error"></small>
          </div>
          
         
          
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>

      </div>
    </form>
  </div>
</div>