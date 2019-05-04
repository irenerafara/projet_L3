<div class="modal" id="addachatcfcol1Modal">
  <div class="modal-dialog">
    <form id = "form-save-achatcfcol1" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter achat comptoir de fonte à collecteurcat1 </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDAchatCfCol1" name = "IDAchatCfCol1">
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
            <label class = "col-sm-6" for="IDCollecteurCat1">collecteurcat1</label>
            <select class="form-control" validation-type = "collecteurcat1" id="IDCollecteurCat1" name="IDCollecteurCat1" required>
              <?php foreach($col1s as $col1)
                {
              extract($col1); 
              ?>
              <option  value = "<?php echo $IDCollecteurCat1; ?>">
                <?php echo $NomCollecteurCat1; ?>
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
              <input type="number"  step="0.01"  class="form-control" id="Quantite" name = "Quantite" placeholder="" required> 
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixUnitaire">Prix unitaire(Ariary/g)</label>
              <input type="number"  step="0.01"  class="form-control" id="PrixUnitaire" name = "PrixUnitaire" placeholder="" required >
              <small class="form-text text-muted error"></small>
          </div>
          <div class="form-group form-inline">
              <label class = "col-sm-6" for="PrixTotale">Prix totale(Ariary)</label>
              <input type="number"  step="0.01" class="form-control" id="PrixTotale" name = "PrixTotale" placeholder="" required >
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