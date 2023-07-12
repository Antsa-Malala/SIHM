<!--
=========================================================
* Material Kit 2 - v3.0.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
  <div class="page-header align-items-start min-vh-100" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto" style="margin-top:100px;">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-secondary shadow-secondary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Recharger votre caisse</h4>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start" method="post" action=<?php echo base_url("Caisse/rechargement_code"); ?> >
                <div class="input-group input-group-static mb-4">
                    <label>Code</label>
                    <input type="text" class="form-control" name="code">
                </div>     
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn bg-gradient-dark w-100">Recharger</button>
                  </div>
                </div>
              </form>
              <label>Tous les codes</label>
              <ul class="list-group">
              <?php for($i=0;$i<count($code);$i++) { ?>
                <li class="list-group-item"><?php echo $code[$i]['code']; ?> avec <?php echo $code[$i]['somme']; ?>Ar</li>
              <?php } ?>
              </ul>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.0" type="text/javascript"></script>