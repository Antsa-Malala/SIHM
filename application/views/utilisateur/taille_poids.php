<body class="forms-sections">
  <!-- Navbar Light -->
  <!-- End Navbar -->
  <div class="container mt-5">
    <div class="row">
      <section>
        <div class="container py-4">
          <div class="row" >
            <div class="col-lg-5 mx-auto d-flex justify-content-center flex-column"id="sign_up">
              <h3 class="text-center">Renseignez votre poids et votre taille</h3>
              <form role="form" id="contact-form" method="post" action=<?php echo site_url("Utilisateur/inscription_trait_sante_client");?>>
                <div class="card-body">
                <div class="row">
                  <div class="mb-4">
                  <div class="input-group input-group-static mb-4">
                        <label>Taille(cm)</label>
                        <input class="form-control" type="number" name="taille">
                      </div>
                  </div>
                  <div class="input-group input-group-static mb-4">
                        <label>Poids</label>
                        <input class="form-control" type="number" name="poids">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn bg-gradient-dark w-100">Valider</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>      
    </div>
  </div>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src=<?php echo base_url("assets/js/core/popper.min.js");?> type="text/javascript"></script>
  <script src=<?php echo base_url("assets/js/core/bootstrap.min.js");?> type="text/javascript"></script>
  <script src=<?php echo base_url("assets/js/plugins/perfect-scrollbar.min.js");?>></script>
  <script src=<?php echo base_url("assets/js/plugins/prism.min.js");?>></script>
  <script src=<?php echo base_url("assets/js/plugins/highlight.min.js");?>></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src=<?php echo base_url("assets/js/plugins/parallax.min.js");?>></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src=<?php echo base_url("assets/js/material-kit.min.js?v=3.0.0");?> type="text/javascript"></script>
</body>