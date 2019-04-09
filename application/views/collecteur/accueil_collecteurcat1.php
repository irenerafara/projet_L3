<div id='collecteurcat1-content' class = "row">
<div class = "col-md-12">
    <h2></h2>
</div>

<div id='collecteurcat1-container' class = "col-md-12">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Liste de collecteur catégorie1
      <button class = "btn btn-primary float-right" id = "button-add" data-toggle="modal" data-target="#addCollecteurCat1Modal"><i class="fas fa-plus"></i> Ajouter</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDCollecteurCat1="dataTable" width="100%" cellspacing="0">
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
            <?php foreach($collecteurcat1s as $collecteurcat1){
              extract((array) $collecteurcat1); ?>
              <tr id = "collecteurcat1-<?php echo $IDCollecteurCat1; ?>">
                <td><?php echo $NomCollecteurCat1; ?></td>
                <td><?php echo $PrenomCollecteurCat1; ?></td>
                <td><?php echo $CINCollecteurCat1; ?></td>
                <td><?php echo $LieuCINCollecteurCat1; ?></td>
                <td><?php echo $DateCINCollecteurCat1; ?></td>
                <td><?php echo $DuplicataCINCollecteurCat1; ?></td>
                <td><?php echo $ContactCollecteurCat1; ?></td>
                <td><?php echo $AdresseCollecteurCat1; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_collecteurcat1(<?php echo $IDCollecteurCat1; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_collecteurcat1(<?php echo $IDCollecteurCat1; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this -> load -> view('collecteur/modal1_add') ?>