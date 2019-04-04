<div id='collecteurcat2-form' class = "row">
<div class = "col-md-12">
    <h2>Liste de collecteur catégorie2</h2>
</div><div id='collecteurcat2-form' class = "row">
<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information collecteur catégorie2
      <button class = "btn btn-primary float-right" id = "button-save-collecteurcat2" data-toggle="modal" data-target="#addCollecteurCat2Modal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDCollecteurCat2="dataTable" width="100%" cellspacing="0">
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
            <?php foreach($collecteurcat2s as $collecteurcat2){
              extract((array) $collecteurcat2); ?>
              <tr id = "collecteurcat2-<?php echo $IDCollecteurCat2; ?>">
                <td><?php echo $NomCollecteurCat2; ?></td>
                <td><?php echo $PrenomCollecteurCat2; ?></td>
                <td><?php echo $CINCollecteurCat2; ?></td>
                <td><?php echo $LieuCINCollecteurCat2; ?></td>
                <td><?php echo $DateCINCollecteurCat2; ?></td>
                <td><?php echo $DuplicataCINCollecteurCat2; ?></td>
                <td><?php echo $ContactCollecteurCat2; ?></td>
                <td><?php echo $AdresseCollecteurCat2; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_collecteurcat2(<?php echo $IDCollecteurCat2; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_collecteurcat2(<?php echo $IDCollecteurCat2; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('collecteur/modal2_add') ?>