
<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information province
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addUserModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDProvince="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom</th>
              
            </tr>
          </thead>
          <tbody>
            <?php foreach($provinces as $province){
              extract((array) $province); ?>
              <tr id = "user-<?php echo $IDProvince; ?>">
                <td><?php echo $NomProvince; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_user(<?php echo $IDProvince; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_user(<?php echo $IDProvince; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('province/modal_add') ?>