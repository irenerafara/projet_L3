<div id='login-form' class = "row">
  <div class = "col-md-12">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Information achat collecteur catégorie2 à collecteur catégorie1
      <button class = "btn btn-primary float-right" id = "button-save-achatcol2col1" data-toggle="modal" data-target="#addachatcol2col1Modal"><i class="fas fa-plus"></i> Ajouter</button>
    </div> 
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" IDAchatCol2Col1="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
              <th>Collecteur catégorie2</th>
              <th>Collecteur catégorie1</th>
              <th>Date</th>
              <th>Quantite</th>
              <th>PrixUnitaire</th>
              <th>PrixTotale</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
          
          <?php foreach($achatcol2col1s as $achatcol2col1){
              extract((array) $achatcol2col1);
             
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
    $reponse2 = $conn->query("SELECT * FROM collecteur_cat1 WHERE IDCollecteurCat1 = '$IDCollecteurCat1' ");
    $donnee2 = $reponse2->fetch(); 
?> 
              <tr id = "achatcol2col1-<?php echo $IDAchatCol2Col1; ?>">
                
                <td ><?php echo $donnee["NomCollecteurCat2"]; ?></td>
                <td ><?php echo $donnee2["NomCollecteurCat1"]; ?></td>
                <td ><?php echo $Date; ?></td>
                <td ><?php echo $Quantite; ?></td>
                <td ><?php echo $PrixUnitaire; ?></td>
                <td ><?php echo $PrixTotale; ?></td>
                
                
                <td> 
                  <div class = "btn-group">
                    <button class = "btn btn-sm btn-primary btn-edit" onClick = "edit_achatcol2col1(<?php echo $IDAchatCol2Col1; ?>)"><i class="fas fa-pencil-alt"></i></button> 
                    <button class = "btn btn-sm btn-danger btn-remove" onClick = "delete_achatcol2col1(<?php echo $IDAchatCol2Col1; ?>)"><i class="fas fa-trash"></i></button> 
                  </div>
                </td>
              </tr>
            <?php } ?>
           
          </tbody>
        </table>
    </div>
  </div>
       
</div>
<?php $this->load->view('achatcol2col1/modal_add') ?>