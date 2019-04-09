<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#formateur">Formateur</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#assistants">Assistant</a>
  </li>
</ul>

<input type = "hidden" id = "formation-edit" value = "<?php echo $details_formation[0] -> IDFormation ?>"/>

<div class="tab-content">
  <div id="formateur" class="tab-pane fade show active">
    <div class = "row">
      <div class = "col-md-5">
        <h4>Liste des utilisateurs</h4>
        <div class = "wrapper-affect">
          <ul class="list-group">
          <?php foreach($utilisateurs as $user) { ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <input type = "checkbox" class = "check-user" id = "user-<?php echo $user['IDUtilisateur'] ?>">
              <label for = "user-<?php echo $user['IDUtilisateur'] ?>">
                  <?php echo $user['NomUtilisateur']." ".$user['PrenomUtilisateur'] ?>
              </label>
            </li>
          <?php } ?>
          </ul> 
        </div>
      </div>
      <div class = "col-md-2">
        <button id = "affectation-formateur" class = "btn btn-success"><i class="fas fa-angle-double-right"></i></button>
      </div>
      <div class = "col-md-5">
        <h4>Liste des formateurs</h4>
        <div class = "wrapper-affected">
          <ul class="list-group">
          <?php foreach($formateurs as $user) { ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class = "nom-prenom"><?php echo $user['NomUtilisateur']." ".$user['PrenomUtilisateur'] ?></span >
              <i class="fas fa-user-times float-right remove-formateur" id = "rmuser-<?php echo $user['IDUtilisateur'] ?>"></i>
            </li>
          <?php } ?>
          </ul> 
        </div>
      </div>
    </div>
  </div>
  <div id="assistants" class="tab-pane fade">
    <div class = "row">
      <div class = "col-md-5">
        <select id = "choix-assistants">
          <option value = "1">Collecteur catégorie 1</option>
          <option value = "2">Orpailleur</option>
        </select>
        <div class = "wrapper-affect">
          <ul class="list-group" id = "list-cc1">
          <?php foreach($collecteurcat1s as $collecteurcat1) { ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <input type = "checkbox" id = "collecteurcat1-<?php echo $collecteurcat1['IDCollecteurCat1'] ?>">
              <label for = "collecteurcat1-<?php echo $collecteurcat1['IDCollecteurCat1'] ?>">
                  <?php echo $collecteurcat1['NomCollecteurCat1']." ".$collecteurcat1['PrenomCollecteurCat1'] ?>
              </label>
            </li>
          <?php } ?>
          </ul> 
          <ul class="list-group" id = "list-orp" style = "display: none;">
          <?php foreach($orpailleurs as $orpailleur) { ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <input type = "checkbox" id = "orpailleur-<?php echo $orpailleur['IDOrpailleur'] ?>">
              <label for = "orpailleur-<?php echo $orpailleur['IDOrpailleur'] ?>">
                  <?php echo $orpailleur['NomOrpailleur']." ".$orpailleur['PrenomOrpailleur'] ?>
              </label>
            </li>
          <?php } ?>
          </ul> 
        </div>
      </div>
      <div class = "col-md-2">
        <button id = "affectation-assistant" class = "btn btn-success"><i class="fas fa-angle-double-right"></i></button>
      </div>
      <div class = "col-md-5">
        <h4>Liste des assistants</h4>
        <div class = "wrapper-affected">
          <ul class="list-group">
          <?php foreach($assistants as $assistant) { ?>
            <li class="list-group-item d-flex justify-content-between align-items-center" type-assistant = "<?php echo $assistant['type'] ?>">
              <span class = "nom-prenom"><?php echo $assistant['nom']." ".$assistant['prenom'] ?></span >
              <i class="fas fa-user-times float-right remove-assistant" id = "rmassist-<?php echo $assistant['id'] ?>"></i>
            </li>
          <?php } ?>
          </ul> 
        </div>
      </div> 
    </div>
  </div>
  </div>
</div>