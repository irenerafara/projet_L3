<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information commune
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addCommuneModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDCommune="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom commune</th>
              <th>Région</th>
              <th>Nom maire</th>
              <th>Prénom Maire</th>
              <th>Contact Maire</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
          <?php foreach($communes as $commune){
              extract((array) $commune); ?>
              <tr id = "commune-<?php echo $IDCommune; ?>">
                <td><?php echo $NomCommune; ?></td>
                <td><?php echo $NomRegion; ?></td>
                <td><?php echo $NomMaire; ?></td>
                <td><?php echo $PrenomMaire; ?></td>
                <td><?php echo $ContactMaire; ?></td>
                
                <td> 
                  <div class ="btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_commune(<?php echo $IDCommune; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_commune(<?php echo $IDCommune; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('commune/modal_save') ?>