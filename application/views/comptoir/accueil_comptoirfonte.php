
<div id='comptoirfonte-form' class = "row">
<div class = "col-md-12">
    <h2></h2>
</div>
<div id='login-form' class = "col-md-12">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Liste du comptoirs de fonte
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addComptoirFonteModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDComptoirDeFonte="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom Societe</th>
              <th>Mandataire</th>
              <th>Contact</th>
              <th>Adresse siège sociale</th>
              <th>Numéro inscription</th>
              <th>Date agrement</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
          <?php foreach($comptoirfontes as $comptoirfonte){
              extract((array) $comptoirfonte); ?>
              <tr id = "comptoirfonte-<?php echo $IDComptoirDeFonte; ?>">
                <td><?php echo $NomSocieteComptoirDeFonte; ?></td>
                <td><?php echo $MandataireComptoirDeFonte; ?></td>
                <td><?php echo $ContactComptoirDeFonte; ?></td>
                <td><?php echo $AdresseSiegeSocialeComptoirDeFonte; ?></td>
                <td><?php echo $NumInscriptionComptoirDeFonte; ?></td>
                <td><?php echo $DateAgrementComptoirDeFonte; ?></td>
                
                <td> 
                  <div class ="btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_comptoirfonte(<?php echo $IDComptoirDeFonte; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_comptoirfonte(<?php echo $IDComptoirDeFonte; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('comptoir/modal1_save') ?>