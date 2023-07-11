<!DOCTYPE html>
<html lang="en" class="scroll-behavior-smooth">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Font/fontawesome-5/css/all.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/vertical-layout-light/style.css'); ?>">

	<title>
		<?php echo $page_title; ?>
	</title>

	<style>
		.footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 5vh;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
        }
	</style>
</head>
<body>
	<div class="container-fluid" style="--bs-gutter-x: 0em; ">
		<?php 
			$this->load->view('template/Header');
			$this->load->view( $body );
		?>
	</div>

	<div class="footer">
		<?php $this->load->view('template/Footer'); ?>
	</div>

    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src=<?php echo("js/off-canvas.js");?>></script>
    <script src=<?php echo("js/hoverable-collapse.js");?>></script>
    <script src=<?php echo("js/template.js");?>></script>
    <script src=<?php echo("js/settings.js");?>></script>
    <script src=<?php echo("js/todolist.js");?>></script>
    <script src=<?php echo("vendors/progressbar.js/progressbar.min.js");?>></script>
    <script src=<?php echo("vendors/chart.js/Chart.min.js");?>></script>
    <script src=<?php echo("js/dashboard.js");?>></script>	
</body>
</html>