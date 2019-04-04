<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information carte
      <button class = "btn btn-primary float-right" id = "button-save-carte" data-toggle="modal" data-target="#addCarteModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDCarte="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Commune</th>
              <th>Numéro carte</th>
              <th>Date  demande carte</th>
              <th>Date obtention carte</th>
              <th>Date expiration carte</th>
              
            </tr>
          </thead>
          <tbody>
          <?php foreach($cartes as $carte){
              extract((array) $carte); ?>
              <tr id = "carte-<?php echo $IDCarte; ?>">
                <td><?php echo $NomCommune; ?></td>
                <td><?php echo $NumCarte; ?></td>
                <td><?php echo $DateDemandeCarte; ?></td>
                <td><?php echo $DateObtentionCarte; ?></td>
                <td><?php echo $DateExpirationCarte; ?></td>
                <td><?php echo $Statut; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_carte(<?php echo $IDCarte; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_carte(<?php echo $IDCarte; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('carte/modal_add') ?>