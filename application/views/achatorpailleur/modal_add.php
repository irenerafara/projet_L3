<div class="modal" id="addachatorpailleurModal">
  <div class="modal-dialog">
    <form id = "form-save-achatorpailleur" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter achat comptoir de fonte à orpailleur </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDAchatOrpailleur" name = "IDAchatOrpailleur">
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
            <label class = "col-sm-6" for="IDOrpailleur">orpailleur</label>
            <select class="form-control" validation-type = "orpailleur" id="IDOrpailleur" name="IDOrpailleur" required>
              <?php foreach($orpailleurs as $orpailleur)
                {
              extract($orpailleur); 
              ?>
              <option  value = "<?php echo $IDOrpailleur; ?>">
                <?php echo $NomOrpailleur; ?>
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