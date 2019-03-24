
<div id='login-form' class = "row">
    <form action="" method='post' name='process' enctype="multipart/form-data">
        <h2>User Login</h2>
        <br />    
        <div class = "alert alert-danger" <?php if(!isset($erreur)) echo 'style = "display: none"' ?> ><?php if(isset($erreur)) echo $erreur; ?></div>
        <div class = "form-group form-inline">
            <label for='username'>Username</label>
            <input class = "form-control" type='text' name='username' id='username' size='150' />
        </div>
        <div class = "form-group form-inline">
            <label for='password'>Password</label>
            <input class = "form-control" type='password' name='password' id='password' size='150' />
        </div>                            
        <button type='Submit' class='btn btn-primary pull-right'>Se connecter</button>            
    </form>
</div>