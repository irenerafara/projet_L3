<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    
                    <!-- Light Logo icon -->
                    <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                    
                    <!-- Light Logo text -->    
                    <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />Markarn Doe</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/utilisateur") ?>" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Utilisateur</span></a>
                </li> 
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/exportation") ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Exportation</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/comptoir_de_fonte") ?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Comptoir de fonte</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/comptoir_commerciale") ?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Comptoir commerciale</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/collecteur_cat2") ?>" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Collecteur catégorie2</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/collecteur_cat1") ?>" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Collecteur catégorie1</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/orpailleur") ?>" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Orpailleur</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/formation") ?>" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Formation</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/carte") ?>" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Carte</span></a>
               </li>
               <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/province") ?>" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Province</span></a>
              </li>
              <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/region") ?>" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Region</span></a>
             </li>
             <li> <a class="waves-effect waves-dark" href="<?php echo base_url("index.php/commune") ?>" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Commune</span></a>
             </li>
            </ul>
            <div class="text-center m-t-30">
                <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-warning hidden-md-down"> Upgrade to Pro</a>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>