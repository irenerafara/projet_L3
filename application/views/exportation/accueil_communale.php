<div id='communale-form' class = "row">
<div class = "col-md-12">
    <h2>Liste des exportations communale</h2>
</div>
<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Exportation
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addExportationCommuneModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDExportation="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>commune</th>
              <th>Quantité</th>
              <th>Prix unitaire</th>
              <th>Prix totale</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($communales as $communale){
              extract((array) $communale); ?>
              <tr id = "exp-<?php echo $IDExportation; ?>">
                <td><?php echo $NomCommune; ?></td>
                <td><?php echo $QuantiteExportation; ?></td>
                <td><?php echo $PrixUnitaireExportation; ?></td>
                <td><?php echo $PrixTotaleExportation; ?></td>

                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_exportation(<?php echo $IDExportation; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_exportation(<?php echo $IDExportation; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('exportation/modal3_add') ?>