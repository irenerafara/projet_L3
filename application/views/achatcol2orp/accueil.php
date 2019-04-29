<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information achat collecteur catégorie2 à orpailleur
      <button class = "btn btn-primary float-right" id = "button-save-achatcol2orp" data-toggle="modal" data-target="#addachatcol2orpModal"><i class="fas fa-plus"></i> Ajouter</button>
    </div> 
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDAchatOrpailleur="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
              <th>Collecteur catégorie2</th>
              <th>Orpailleur</th>
              <th>Date</th>
              <th>Quantite</th>
              <th>PrixUnitaire</th>
              <th>PrixTotale</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
          
          <?php foreach($achatcol2orps as $achatcol2orp){
              extract((array) $achatcol2orp);
             
              ?>
              
               <?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=db_anor", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $reponse = $conn->query("SELECT * FROM collecteur_cat2 WHERE IDCollecteurCat2 = '$IDCollecteurCat2' ");
    $donnee = $reponse->fetch();
    $reponse2 = $conn->query("SELECT * FROM orpailleur WHERE IDOrpailleur = '$IDOrpailleur' ");
    $donnee2 = $reponse2->fetch(); 
?> 
              <tr id = "achatcol2orp-<?php echo $IDAchatCol2Orp; ?>">
                
                <td ><?php echo $donnee["NomCollecteurCat2"]; ?></td>
                <td ><?php echo $donnee2["NomOrpailleur"]; ?></td>
                <td ><?php echo $Date; ?></td>
                <td ><?php echo $Quantite; ?></td>
                <td ><?php echo $PrixUnitaire; ?></td>
                <td ><?php echo $PrixTotale; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_achatcol2orp(<?php echo $IDAchatCol2Orp; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_achatcol2orp(<?php echo $IDAchatCol2Orp; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this->load->view('achatcol2orp/modal_add') ?>