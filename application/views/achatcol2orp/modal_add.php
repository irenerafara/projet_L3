<div class="modal" id="addachatcol2orpModal">
  <div class="modal-dialog">
    <form id = "form-save-achatcol2orp" action = "url">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter achat collecteur catégorie2 à orpailleur </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <input type="hidden" class="form-control" id="IDAchatCol2Orp" name = "IDAchatCol2Orp">
        <!-- Modal body -->
        <div class="modal-body">
       
           
          <div class="form-group form-inline">
            <label class = "col-sm-6" for="IDCollecteurCat2">collecteur catégorie2</label>
            <select class="form-control" validation-type = "collect2" id="IDCollecteurCat2" name="IDCollecteurCat2" required>
              <?php foreach($col2s as $col2)
                {
              extract($col2); 
              ?>
              <option  value = "<?php echo $IDCollecteurCat2; ?>">
                <?php echo $NomCollecteurCat2; ?>
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
              <input type="number"  step="0.01" class="form-control" id="Quantite" name = "Quantite" placeholder="" required> 
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