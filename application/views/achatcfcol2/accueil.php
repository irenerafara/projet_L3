<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information achat comptoir de fonte à collecteur catégorie2
      <button class = "btn btn-primary float-right" id = "button-save-achatcfcol2" data-toggle="modal" data-target="#addachatcfcol2Modal"><i class="fas fa-plus"></i> Ajouter</button>
    </div> 
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDAchatCfCol2="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
              <th>Comptoir de fonte</th>
              <th>Collecteur catégorie2</th>
              <th>Date</th>
              <th>Quantite</th>
              <th>PrixUnitaire</th>
              <th>PrixTotale</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
          
          <?php foreach($achatcfcol2s as $achatcfcol2){
              extract((array) $achatcfcol2);
            
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
    $reponse = $conn->query("SELECT * FROM comptoir_de_fonte WHERE IDComptoirDeFonte = '$IDComptoirDeFonte' ");
    $donnee = $reponse->fetch();
    $reponse2 = $conn->query("SELECT * FROM collecteur_cat2 WHERE IDCollecteurCat2= '$IDCollecteurCat2' ");
    $donnee2 = $reponse2->fetch(); 
?> 
              <tr id = "achatcfcol2-<?php echo $IDAchatCfCol2; ?>">
                
                <td ><?php echo $donnee["NomSocieteComptoirDeFonte"]; ?></td>
                <td ><?php echo $donnee2["NomCollecteurCat2"]; ?></td>
                <td ><?php echo $Date; ?></td>
                <td ><?php echo $Quantite; ?></td>
                <td ><?php echo $PrixUnitaire; ?></td>
                <td ><?php echo $PrixTotale; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_achatcfcol2(<?php echo $IDAchatCfCol2; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_achatcfcol2(<?php echo $IDAchatCfCol2; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this->load->view('achatcfcol2/modal_add') ?>