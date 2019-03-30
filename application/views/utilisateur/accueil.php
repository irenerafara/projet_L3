
<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information utilisateur
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addUserModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDUtilisateur="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Adresse</th>
              <th>Contact</th>
              <th>Type</th>
              <th>Email</th>
              <th>Mot de passe</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($utilisateurs as $user){
              extract((array) $user); ?>
              <tr id = "user-<?php echo $IDUtilisateur; ?>">
                <td><?php echo $NomUtilisateur; ?></td>
                <td><?php echo $PrenomUtilisateur; ?></td>
                <td><?php echo $AdresseUtilisateur; ?></td>
                <td><?php echo $ContactUtilisateur; ?></td>
                <td><?php echo $TypeUtilisateur; ?></td>
                <td><?php echo $EmailUtilisateur; ?></td>
                <td> ********* </td>
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_user(<?php echo $IDUtilisateur; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_user(<?php echo $IDUtilisateur; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('utilisateur/modal_add') ?>