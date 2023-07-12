<!-- Navbar Transparent -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
       E-Kaly
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Profil  
              <img src=<?php echo base_url("assets/img/down-arrow-white.svg");?> alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src=<?php echo base_url("assets/img/down-arrow-dark.svg");?> alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                 Mon profil
                </h6>
                <a href=<?php echo site_url("Utilisateur/home");?> class="dropdown-item border-radius-md">
                  <span>Voir mon profil</span>
                </a>
                <a href=<?php echo site_url("Utilisateur/modifier");?> class="dropdown-item border-radius-md">
                  <span>Modifier mon profil</span>
                </a>
              </div>
              <div class="d-lg-none">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Mon profil
                </h6>
                <a href=<?php echo site_url("Utilisateur/home");?> class="dropdown-item border-radius-md">
                  <span>Voir mon profil</span>
                </a>
                <a href=<?php site_url("Utilisateur/modifier");?> class="dropdown-item border-radius-md">
                  <span>Modifier mon profil</span>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
             Régime
              <img src=<?php echo base_url("assets/img/down-arrow-white.svg");?> alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src=<?php echo base_url("assets/img/down-arrow-dark.svg");?> alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                Régimes
                </h6>
                <a href=<?php echo site_url("Regime/get_regime_proposition");?> class="dropdown-item border-radius-md">
                  <span>Voir les propositions de menus</span>
                </a>
              </div>
              <div class="d-lg-none">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                Régimes
                </h6>
                <a href=<?php echo site_url("Regime/get_regime");?> class="dropdown-item border-radius-md">
                  <span>Voir les propositions de menus</span>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
             Caisse
              <img src=<?php echo base_url("assets/img/down-arrow-white.svg");?> alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src=<?php echo base_url("assets/img/down-arrow-dark.svg");?> alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
               Caisse
                </h6>
                <a href=<?php echo site_url("Caisse/insert_code");?> class="dropdown-item border-radius-md">
                  <span>Recharger ma caisse</span>
                </a>
              </div>
              <div class="d-lg-none">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Caisse
                   </h6>
                   <a href=<?php echo site_url("#");?> class="dropdown-item border-radius-md">
                     <span>Etat de caisse</span>
                   </a>
                   <a href=<?php echo site_url("#");?> class="dropdown-item border-radius-md">
                     <span>Recharger ma caisse</span>
                   </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
              <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"  href=<?php echo site_url("Utilisateur/logout");?>>
                <span style="margin-right: 10px;">Log out</span>
                <i class="fas fa-sign-out-alt"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
