<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information achat comptoir de fonte à orpailleur
      <button class = "btn btn-primary float-right" id = "button-save-achatorpailleur" data-toggle="modal" data-target="#addachatorpailleurModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDAchatOrpailleur="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>IDOrpailleur</th>
              <th>IDComptoirDeFonte</th>
              <th>Date</th>
              <th>Quantite</th>
              <th>PrixUnitaire</th>
              <th>PrixTotale</th>
              
            </tr>
          </thead>
          <tbody>
          <?php foreach($achatorpailleurs as $achatorpailleur){
              extract((array) $achatorpailleur); ?>
              <tr id = "achatorpailleur-<?php echo $IDAchatOrpailleur; ?>">
                <td><?php echo $IDOrpailleur; ?></td>
                <td><?php echo $IDComptoirDeFonte; ?></td>
                <td><?php echo $Date; ?></td>
                <td><?php echo $Quantite; ?></td>
                <td><?php echo $PrixUnitaire; ?></td>
                <td><?php echo $PrixTotale; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_achatorpailleur(<?php echo $IDAchatOrpailleur; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_achatorpailleur(<?php echo $IDAchatOrpailleur; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this->load->view('achatorpailleur/modal_add') ?>