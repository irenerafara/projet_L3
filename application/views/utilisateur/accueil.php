
<div id='login-form' class = "row">
    <div class = "col-md-12">
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Information utilisateur</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" IDUtilisateur="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>IDUtilisateur</th>
                    <th>NomUtilisateur</th>
                    <th>PrenomUtilisateur</th>
                    <th>AdresseUtilisateur</th>
                    <th>ContactUtilisateur</th>
                    <th>TypeUtilisateur</th>
                    <th>EmailUtilisateur</th>
                    <th>MotDePasseUtilisateur</th>
                  </tr>
                </thead>
                <tbody>
        <?php foreach($utilisateurs as $user){
          $user     = get_object_vars($user);
          $IDUtilisateur      = $user['IDUtilisateur'];
          $NomUtilisateur   = $user['NomUtilisateur'];
          $PrenomUtilisateur = $user['PrenomUtilisateur'];
          $AdresseUtilisateur     = $user['AdresseUtilisateur'];
          $ContactUtilisateur  = $user['ContactUtilisateur'];
          $TypeUtilisateur = $user['TypeUtilisateur'];
          $EmailUtilisateur = $user['EmailUtilisateur'];
          $MotDePasseUtilisateur = $user['MotDePasseUtilisateur'];
       ?>
       <tr>
       <td> <?php echo $IDUtilisateur; ?></td>
       <td> <?php echo $NomUtilisateur; ?> </td>
       <td> <?php echo $PrenomUtilisateur; ?></td>
       <td> <?php echo $AdresseUtilisateur; ?> </td>
       <td> <?php echo $ContactUtilisateur; ?></td>
       <td> <?php echo $TypeUtilisateur; ?> </td>
       <td> <?php echo $EmailUtilisateur; ?></td>
       <td> <?php echo $MotDePasseUtilisateur; ?> </td>
       </tr>
<?php } ?>
 <script type="text/javascript">
     function afficher() {
    alert("Bonjour");
 }
  </script>
 <form>
    <input type="submit" name="Ajouter" value="Ajouter" onclick="afficher();">
</form>
      </tbody>
          </table>
          </div>
    </div>
       
</div>