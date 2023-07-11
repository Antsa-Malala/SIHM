  <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
  <header>
    <div class="page-header min-height-400" style="background-image: url(<?php echo base_url('assets/img/how-to-eat-healthy.webp');?>);" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src=<?php echo base_url("assets/img/user.png");?> alt="bruce" loading="lazy">
            </div>
            <div class="row py-5">
              <div class="col-lg-7 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0"><?php echo $user['prenom']." ".$user['nom'];?></h3>
                  <div class="d-block">
                    <a href = <?php echo site_url("Utilisateur/modifier");?>><button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Modifier mon profil</button></a>
                  </div>
                </div>
                <div class="row">
                  <p>
                    Date naissance : <?php echo $user['date_naissance'];?><br>
                    Genre : <?php echo $genre;?><br>
                    Taille : <?php echo $taille['taille'];?> cm<br>
                    Poids : <?php echo $poids['poids'];?> kg<br>
                  </p>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 class="mb-0"></h3>
                    <div>
                      <p>Votre caisse :</p>
                      <h1 class="text-gradient text-primary"><span id="state1" countTo="70"><?php echo $etat; ?></span>Ar</h1>
                      <p>All depense :</p>
                      <h3 class="text-gradient text-primary"><span id="state1" countTo="70"><?php echo $depense; ?></span>Ar</h3>
                      <p>All rechargement :</p>
                      <h3 class="text-gradient text-primary"><span id="state1" countTo="70"><?php echo $recharge; ?></span>Ar</h3>
                    </div>
                  </div>
                
                </div>
                <p class="h6">
                  Objectif : <?php echo $action." ".$objectif['valeur'];?> kg
                 <p class="text-lg mb-0">
                  <br><a href=<?php echo site_url("objectif/modifier_objectif");?> class="text-info icon-move-right">Modifier mon objectif
                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
  </div>