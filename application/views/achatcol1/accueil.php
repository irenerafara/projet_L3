<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information achat comptoir commerciale à collecteur catégorie1
      <button class = "btn btn-primary float-right" id = "button-save-achatcol1" data-toggle="modal" data-target="#addachatcol1Modal"><i class="fas fa-plus"></i> Ajouter</button>
    </div> 
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDAchatCollecteurCat1="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
              <th>Comptoir commerciale</th>
              <th>Collecteur catégorie1</th>
              <th>Date</th>
              <th>Quantite</th>
              <th>PrixUnitaire</th>
              <th>PrixTotale</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
          
          <?php foreach($achatcol1s as $achatcol1){
              extract((array) $achatcol1);
             
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
    $reponse = $conn->query("SELECT * FROM comptoir_commerciale WHERE IDComptoirComm = '$IDComptoirComm' ");
    $donnee = $reponse->fetch();
    $reponse2 = $conn->query("SELECT * FROM collecteur_cat1 WHERE IDCollecteurCat1 = '$IDCollecteurCat1' ");
    $donnee2 = $reponse2->fetch(); 
?> 
              <tr id = "achatcol1-<?php echo $IDAchatCollecteurCat1; ?>">
                
                <td ><?php echo $donnee["NomSocieteComptoirComm"]; ?></td>
                <td ><?php echo $donnee2["NomCollecteurCat1"]; ?></td>
                <td ><?php echo $Date; ?></td>
                <td ><?php echo $Quantite; ?></td>
                <td ><?php echo $PrixUnitaire; ?></td>
                <td ><?php echo $PrixTotale; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_achatcol1(<?php echo $IDAchatCollecteurCat1; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_achatcol1(<?php echo $IDAchatCollecteurCat1; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this->load->view('achatcol1/modal_add') ?>