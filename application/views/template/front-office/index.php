<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?php echo $title; ?>
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href=<?php echo base_url("assets/css/nucleo-icons.css");?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/nucleo-svg.css");?> rel="stylesheet" />
  <link href=<?php echo base_url("assets/css/style.css");?> rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href=<?php echo base_url("assets/css/material-kit.css?v=3.0.0");?> rel="stylesheet" />
</head>

<body>
	<div class="container-fluid" style="--bs-gutter-x: 0em; ">
		<?php 
			$this->load->view('template/front-office/Header');
			$this->load->view( $body );
		?>
	</div>

	<div class="footer">
		<?php $this->load->view('template/front-office/Footer'); ?>
	</div>

  <!--   Core JS Files   -->
  <script src=<?php echo base_url("assets/js/core/popper.min.js");?> type="text/javascript"></script>
  <script src=<?php echo base_url("assets/js/core/bootstrap.min.js");?> type="text/javascript"></script>
  <script src=<?php echo base_url("assets/js/plugins/perfect-scrollbar.min.js");?>></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src=<?php echo base_url("assets/js/plugins/parallax.min.js");?>></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src=<?php echo base_url("assets/js/material-kit.min.js?v=3.0.0");?> type="text/javascript"></script>
</body>

</html>