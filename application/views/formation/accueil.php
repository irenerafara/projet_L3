
<div id='formation-wrapper' class = "row">
  <div id = "list-container" class = "col-md-12">
    <div class = "col-md-12">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Liste des formations
        <button class = "btn btn-primary float-right" id = "button-save-formation" data-toggle="modal" data-target="#addFormationModal"><i class="fas fa-plus"></i> Ajouter</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" IDFormation="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th>Commune</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Motif</th>
                <th>Détail</th>
                <th>Nb Formateurs</th>
                <th>Nb assistants</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($formations as $formation){
                extract((array) $formation); ?>
                <tr id = "formation-<?php echo $IDFormation; ?>">
                  <td><?php echo $NomCommune; ?></td> 
                  <td><?php echo $DateDebutFormation; ?></td>
                  <td><?php echo $DateFinFormation; ?></td>
                  <td><?php echo $MotifMissionFormation; ?></td>
                  <td><?php echo $DetailFormation; ?></td>
                  <td class = "text-center"><?php echo $nbformateur; ?></td>
                  <td class = "text-center"><?php echo $nbassistant; ?></td>
                  
                  
                  <td> 
                    <div class = "btn-group">
                      <button class = "btn btn-sm btn-success btn-action edit-details-formation" id = "editinfo-<?php echo $IDFormation; ?>" title = "Gérer les formateurs et les assistants à la formation"><i class="fas fa-angle-right"></i></button> 
                      <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_formation(<?php echo $IDFormation; ?>)" title = "Mettre à jour"><i class="fas fa-pencil-alt"></i></button> 
                      <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_formation(<?php echo $IDFormation; ?>)" title = "Supprimer"><i class="fas fa-trash"></i></button> 
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
  </div>
  <div id = "details-container" class = "col-md-12">
    <div id = "details-head">
      <button class = "btn btn-default btn-action" id = "back-formation" title = "Retour à la liste des formations"><i class="fas fa-arrow-left"></i></button> 
    </div>
    <div id = "details-content">

    </div>
  </div>
</div>
<?php $this -> load -> view('formation/modal_add') ?>