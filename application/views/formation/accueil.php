
<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information formation
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addOrpailleurModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDFormation="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Date debut</th>
              <th>Date fin</th>
              <th>Motif</th>
              <th>Détail</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($Formation as $formation){
              extract((array) $formation); ?>
              <tr id = "user-<?php echo $IDFormation; ?>">
                <td><?php echo $DateDebutFormation; ?></td>
                <td><?php echo $DateFinFormation; ?></td>
                <td><?php echo $MotifMissionFormation; ?></td>
                <td><?php echo $DetailFormation; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_user(<?php echo $IDFormation; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_user(<?php echo $IDFormation; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('formation/modal_add') ?>