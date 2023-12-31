<!--
=========================================================
* Material Kit 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-kit
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url("assets/img/apple-icon.png");?>>
  <link rel="icon" type="image/png" href=<?php echo base_url("assets/img/favicon.png");?>>
  <title>
    E-kaly
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href=<?php echo base_url("asset/css/nucleo-icons.css");?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/nucleo-svg.css");?> rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href=<?php echo base_url("assets/css/material-kit.css?v=3.0.0");?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/style.css");?> rel="stylesheet" />
</head>

<body class="forms-sections">
  <!-- Navbar Light -->
  <!-- End Navbar -->
  <div class="container mt-5">
    <div class="row">
      <section>
        <div class="container py-4">
          <div class="row" >
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column" id="log_in">
              <h3 class="text-center">Sign in</h3>
              <form role="form" id="contact-form" method="post"  action=<?php echo site_url("Utilisateur/verif_login");?>>
                <div class="card-body">
                    <div class="row">
                      <div class="mb-4">
                          <div class="input-group input-group-static my-3">
                              <label>Email</label>
                              <input type="mail" class="form-control" name="mail" value="john.doe@example.com">
                          </div>
                      </div>
                      <div class="mb-4">
                          <div class="input-group input-group-static my-3">
                            <label>Mot de passe</label>
                          <input type="password" class="form-control" name="mdp" value="password123">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn bg-gradient-dark w-100">Sign in</button>
                      </div>
                      <div id="log_admin">
                          <a href=<?php echo site_url("Admin/login");?>>Log as <span id="admin">administrator</span></a>
                      </div>
                      <div id="log_admin">
                          <a href=<?php echo site_url("Utilisateur/inscription");?>><span id="sign">Sign up</span></a>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
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

</html>