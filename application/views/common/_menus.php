<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>">
        <i class="fas fa-ankh"></i>
          <span>Tableau de bord</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fab fa-app-store-ios"></i>
          <span>Exportation</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header"> <a href="<?php echo base_url('index.php/exportation/annuelle') ?>">Annuelle</a></h6>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header"> <a href="<?php echo base_url('index.php/exportation/mensuelle') ?>">Mensuelle</a></h6>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header"> <a href="<?php echo base_url('index.php/exportation/communale') ?>">Communale</a></h6>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-address-card"></i>
          <span>Comptoirs</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header"> <a href="<?php echo base_url('index.php/comptoir/comptoir_fonte') ?>">comptoir de fonte</a></h6>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header"> <a href="<?php echo base_url('index.php/comptoir/comptoir_commerciale') ?>">comptoir commerciale</a></h6>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-address-book"></i>
          <span>Collecteurs</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header"> <a href="<?php echo base_url('index.php/collecteur/collecteur_cat1') ?>">Collecteur catégorie1</a></h6>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header"> <a href="<?php echo base_url('index.php/collecteur/collecteur_cat2') ?>">Collecteur catégorie2</a></h6>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/orpailleur') ?>">
        <i class="fab fa-android"></i>
          <span>orpailleur</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/utilisateur') ?>">
        <i class="fas fa-address-book"></i>
          <span>Utilisateur</span></a>
     </li>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/formation') ?>">
        <i class="fab fa-acquisitions-incorporated"></i>
          <span>Formation</span></a>
          </li>
       </li>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/commune') ?>">
        <i class="fas fa-air-freshener"></i>
          <span>Commune</span></a>
     </li>
       </li>
    </ul>