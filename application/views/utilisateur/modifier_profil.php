      <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
      <header>
    <div class="page-header min-height-400" style="background-image: url('../assets/img/how-to-eat-healthy.webp');" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
            <div class="container py-4">
              <div class="row" >
                <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src=<?php echo base_url("assets/img/user.png");?> alt="bruce" loading="lazy">
            </div>
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column"id="sign_up">
                  <h3 class="text-center">Modifier votre profil</h3>
                  <form role="form" id="contact-form" method="post" autocomplete="off" action=<?php echo site_url("Utilisateur/modifier_trait");?>>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                            <label>Nom</label>
                            <input class="form-control" aria-label="First Name..." type="text" name="nom" value=<?php echo $detail['nom'];?> >
                          </div>
                        </div>
                        <div class="col-md-6 ps-2">
                          <div class="input-group input-group-static">
                            <label>Prenom</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Last Name..." name="prenom" value=<?php echo $detail['prenom'];?>>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group input-group-static mb-4">
                            <label>Taille</label>
                            <input class="form-control" type="number" name="taille" value=<?php echo $taille['taille'];?>>
                          </div>
                        </div>
                        <div class="col-md-6 ps-2">
                          <div class="input-group input-group-static mb-4">
                            <label>Poids</label>
                            <input class="form-control" type="number" name="poids" value=<?php echo $poids['poids']; ?>>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <div class="input-group input-group-static">
                          <label>Email</label>
                          <input type="email" class="form-control" name="mail" value=<?php echo $detail['mail']; ?>>
                        </div>
                      </div>
                      <div class="mb-4">
                        <div class="input-group input-group-static">
                          <label>Mot de passe</label>
                          <input type="password" class="form-control" name="mdp">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn bg-gradient-dark w-100">Modifier</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>     
    </section>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
    <!-- END Blogs w/ 4 cards w/ image & text & link -->
  </div>