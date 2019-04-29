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
              <th>Type client</th>
              <th>Nom Prénom</th>
              <th>Commune</th>
              <th>Numéro carte</th>
              <th>Date  demande carte</th>
              <th>Date obtention carte</th>
              <th>Date expiration carte</th>
              <th>Statut</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
          <?php foreach($cartes as $carte){
              extract((array) $carte); 
              if(isset($IDCollecteurCat1)) {
                $idCol1 = "$IDCollecteurCat1";
                $TypeCol1 = 1;
                $typeCollecteurCat1 = "collecteur catégorie 1";
                $nomPrenom = "$nom_prenomcc1";
              }else if(isset($IDCollecteurCat2)) {
                $idCol1 = "$IDCollecteurCat2";
                $TypeCol1 = 2;
                $typeCollecteurCat1 = "Collecteur catégorie 2";
                $nomPrenom = "$nom_prenomcc2";
              }else if(isset($IDComptoirDeFonte)) {
                $idCol1 = "$IDComptoirDeFonte";
                $TypeCol1 = 3;
                $typeCollecteurCat1 = "Comptoir de fonte";
                $nomPrenom = "$nom_prenomcf";
              } else if(isset($IDComptoirComm)) {
                $idCol1 = "$IDComptoirComm";
                $TypeCol1 = 4;
                $typeCollecteurCat1 = "Comptoir commerciale";
                $nomPrenom = "$nom_prenomcc";
              }else if(isset($IDOrpailleur)) {
                $idCol1 = "$IDOrpailleur";
                $TypeCol1 = 5;
                $typeCollecteurCat1 = "Orpailleur";
                $nomPrenom = "$nom_prenomorp";
              }
               if(isset($IDCommune)) {
                $idCommune = "$IDCommune";
                $Commune = 5;
                $Commune = "Commune";
                $NomCommune = "$NomCommune";
              }
              ?>
              <tr id = "carte-<?php echo "$IDCarte-$TypeCol1-$idCol1"; ?>">
                <td><?php echo $typeCollecteurCat1; ?></td>
                <td><?php echo $nomPrenom; ?></td>
                <td><?php echo $NomCommune; ?></td>
                <td><?php echo $NumCarte; ?></td>
                <td><?php echo $DateDemandeCarte; ?></td>
                <td><?php echo $DateObtentionCarte; ?></td>
                <td><?php echo $DateExpirationCarte; ?></td>
                <td><?php echo $StatutCarte; ?></td>
                
                
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