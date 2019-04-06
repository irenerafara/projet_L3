<div id='exportation-content' class = "row">
<div class = "col-md-12">
    <h2></h2>
</div>
<div id='exportation-container' class = "col-md-12">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Liste des exportations
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addExportationModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDExportation="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Type exportateur</th>
              <th>Nom Prénom</th>
              <th>Année</th>
              <th>Mois</th>
              <th>Quantité</th>
              <th>P.U</th>
              <th>Prix totale</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($exportations as $exportation){
              extract($exportation);
              if(isset($IDExportateur)) {
                $idExp = "$IDExportateur";
                $TypeExp = 1;
                $typeExportateur = "Exportateur";
                $nomPrenom = "$nom_prenomexp";
              } else if(isset($IDCollecteurCat2)) {
                $idExp = "$IDCollecteurCat2";
                $TypeExp = 4;
                $typeExportateur = "Collecteur catégorie 2";
                $nomPrenom = "$nom_prenomcc2";
              } else if(isset($IDComptoirCommerciale)) {
                $idExp = "$IDComptoirCommerciale";
                $TypeExp = 3;
                $typeExportateur = "Comptoir commerciale";
                $nomPrenom = "$nom_prenomcc";
              } else if(isset($IDComptoirDeFonte)) {
                $idExp = "$IDComptoirDeFonte";
                $TypeExp = 2;
                $typeExportateur = "Comptoir de fonte";
                $nomPrenom = "$nom_prenomcf";
              }
              
              ?>
              <tr id = "exportation-<?php echo "$IDExportation-$TypeExp-$idExp"; ?>">
                <td><?php echo $typeExportateur; ?></td>
                <td><?php echo $nomPrenom; ?></td>
                <td><?php echo $AnneeExportation; ?></td>
                <td><?php echo $MoisExportation; ?></td>
                <td><?php echo $QuantiteExportation; ?></td>
                <td><?php echo $PrixUnitaireExportation; ?></td>
                <td><?php echo $PrixTotaleExportation; ?></td>

    
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit"><i class="fas fa-pencil-alt"></i></button> 
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
<?php $this -> load -> view('exportation/modal_add') ?>