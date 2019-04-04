<div id='comptoircomm-form' class = "row">
<div class = "col-md-12">
    <h2>Liste de comptoir commerciale</h2>
</div>
<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information comptoir commerciale
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addComptoirCommModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDComptoirComm="dataTable" width="100%" cellspacing="0">
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
          <?php foreach($comptoircomms as $comptoircomm){
              extract((array) $comptoircomm); ?>
              <tr id = "comptoircomm-<?php echo $IDComptoirComm; ?>">
                <td><?php echo $NomSocieteComptoirComm; ?></td>
                <td><?php echo $MandataireComptoirComm; ?></td>
                <td><?php echo $ContactComptoirComm; ?></td>
                <td><?php echo $AdresseSiegeSocialeComptoirComm; ?></td>
                <td><?php echo $NumInscriptionComptoirComm; ?></td>
                <td><?php echo $DateAgrementComptoirComm; ?></td>
                
                <td> 
                  <div class ="btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_comptoircomm(<?php echo $IDComptoirComm; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_comptoircomm(<?php echo $IDComptoirComm; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('comptoir/modal2_add') ?>