<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Liste de l'exportateur
      <button class = "btn btn-primary float-right" id = "button-save-exportateur" data-toggle="modal" data-target="#addExportateurModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDExportateur="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom societe</th>
              <th>Nom exportateur</th>
              <th>Prenom</th>
              <th>Stat</th>
              <th>Nif</th>
              <th>Fiscal</th>
              <th>Contact</th>
              <th>Adresse</th>
              <th>Mandataire</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($exportateurs as $exportateur){
              extract((array) $exportateur); ?>
              <tr id = "exportateur-<?php echo $IDExportateur; ?>">
                <td><?php echo $NomSocieteExportateur; ?></td>
                <td><?php echo $NomExportateur; ?></td>
                <td><?php echo $PrenomExportateur; ?></td>
                <td><?php echo $StatExportateur; ?></td>
                <td><?php echo $NifExportateur; ?></td>
                <td><?php echo $FiscalExportateur; ?></td>
                <td><?php echo $ContactExportateur; ?></td>
                <td><?php echo $AdresseExportateur; ?></td>
                <td><?php echo $MandataireExportateur; ?></td>
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_exportateur(<?php echo $IDExportateur; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_exportateur(<?php echo $IDExportateur; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('exportateur/modal_add') ?>