<div class="modal" id="addachatcol1Modal">
  <div class="modal-dialog">
    <form id = "form-save-achatcol1" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter achat comptoir commerciale à collecteurcat1 </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDAchatCollecteurCat1" name = "IDAchatCollecteurCat">
        <!-- Modal body -->
        <div class="modal-body">
       
           
          <div class="form-group form-inline">
            <label class = "col-sm-6" for="IDComptoirComm">comptoir commerciale</label>
            <select class="form-control" validation-type = "comptoircomm" id="IDComptoirComm" name="IDComptoirComm" required>
              <?php foreach($comptoircomms as $comptoircomm)
                {
              extract($comptoircomm); 
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