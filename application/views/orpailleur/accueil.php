
<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information orpailleur
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addOrpailleurModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDOrpailleur="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>CIN</th>
              <th>Lieu CIN</th>
              <th>Date CIN</th>
              <th>Duplicata CIN</th>
              <th>Contact</th>
              <th>Adresse</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($orpailleurs as $orpailleur){
              extract((array) $orpailleur); ?>
              <tr id = "user-<?php echo $IDOrpailleur; ?>">
                <td><?php echo $NomOrpailleur; ?></td>
                <td><?php echo $PrenomOrpailleur; ?></td>
                <td><?php echo $CINOrpailleur; ?></td>
                <td><?php echo $LieuCINOrpailleur; ?></td>
                <td><?php echo $DateCINOrpailleur; ?></td>
                <td><?php echo $AdresseOrpailleur; ?></td>
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_user(<?php echo $IDOrpailleur; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_user(<?php echo $IDOrpailleur; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('orpailleur/modal_add') ?>