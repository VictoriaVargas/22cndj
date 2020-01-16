<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>22 Congreso Nacional de Danza Jazz</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
		<link rel="apple-touch-icon" href=assets/img/favicon.png" />

		<link rel="stylesheet" href="<?= base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url();?>assets/vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= base_url();?>assets/vendor/themify-icons/themify-icons.min.css">
		<link href="<?= base_url();?>assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="<?= base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="<?= base_url();?>assets/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">

		<link href="<?= base_url();?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css">
		<link rel="stylesheet" href="<?= base_url();?>assets/css/plugins.css">
		<link rel="stylesheet" href="<?= base_url();?>assets/css/themes/theme-1.css" id="skin_color" />
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<body>
		<div id="app">
			<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar" style="display: ">
				<div class="sidebar-container perfect-scrollbar" >
					<nav>						
						<!-- start: CORE FEATURES -->
						<div class="navbar-title">
							<img src="<?= base_url()?>assets/img/logo2020.jpg" width="300">
						</div>
						<ul class="folders">
							<li style="text-align: center;">
							</li>

						</ul>
						<!-- end: CORE FEATURES -->
						<!-- start: DOCUMENTATION BUTTON -->
						<div class="wrapper">
							<a href="documentation.html" class="button-o">
								<i class="ti-help"></i>
								<span>INFORMES</span>
							</a>
						</div>
						<!-- end: DOCUMENTATION BUTTON -->
					</nav>
				</div>
			</div>
			<!-- / sidebar -->

			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>


					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">

						<h3 class="margin-top-20">22 Congreso Nacional de Danza Jazz</h3>								

					</div>
	
					<!-- end: NAVBAR COLLAPSE -->
				</header>

				<?php if ($alumno){ ?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-10">
									<h1 class="mainTitle">Tu registro fué exitoso</h1>
									<!--<span class="mainDescription" style="color:#5b5b5b">** Antes de seleccionar la opción << Siguiente >> deberás haber realizado tu pago y tener a la mano la fotografía en JPG, legible y completa del comprobante, así como todos los datos generales de cada alumno a inscribir. Para los grupos o escuelas que inscriban a todos sus alumnos en un solo pago, deberán llenar un registro por cada uno usando el mismo comprobante de pago.</span>-->
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Confirmación</span>
									</li>
									<li class="active">
										<span>22° Congreso Nacional de Danza </span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: WIZARD DEMO -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-6">
									<h3 class="text-center text-primary text-bold">¡¡Felicidades <?= $alumno->nombre." ".$alumno->paterno." ".$alumno->materno ?> !!</h3>
									<table class="table table-striped margin-top-20">
										<tr>
											<td align="center"><img src="<?= base_url()?>assets/img/logo.jpg" width="100px"></td>
										</tr>
										<tr>
											<td>Sede: <span class="text-bold text-primary"><?= $alumno->nombre_sede ?></span></td>
										</tr>
										<tr>
											<td>Paquete: <span class="text-bold text-primary"><?= $alumno->paquete ?></span></td>
										</tr>
										<tr>
											<td>Nivel: <span class="text-bold text-primary"><?= $alumno->nivel ?></span></td>
										</tr>	
										<tr>
											<td>Fecha Registro: <span class="text-bold text-primary"><?= $alumno->fecha_registro ?></span></td>
										</tr>																				
									</table>
								</div>
								<div class="col-md-6">
									<table class="table table-striped">
										<tr>
											<td align="center">código de registro: <h3 class="text-bold text-primary text-center"><?= $alumno->token_qr ?></h3></td>
										</tr>
										<tr>
											<td align="center">
												<img src="<?= base_url()?>assets/qr/<?= $token?>.png">
												<h4 class="text-primary">Guarda este QR en tu teléfono o computadora para mostrarlo el dia del registro, esto facilitará el proceso.</h4>
											</td>
										</tr>
										<tr>
											<td align="center">											
												<a class="btn btn-wide btn-primary" target="_blank" href="<?= base_url()?>inicio/comprobante/<?= $token?>" ><i class="fa fa-save"></i> Guardar comprobante</a>												
												<a class="btn btn-wide btn-primary" href="<?= base_url()?>" ><i class="fa fa-share"></i> Regresar</a>
											</td>
										</tr>

									</table>
								</div>	
							</div>
						</div>
						<!-- start: WIZARD DEMO -->
					</div>
				</div>
				<? } 
				else{ ?> 
				<h1 class="text-center text-primary margin-top-20"> No existe este usuario registrado </h1>
				<center><a href="<?= base_url() ?>" class="btn btn-primary margin-top-20 text-center">Regresar </a> </center
				<?php } ?>



			<!-- start: FOOTER -->
			<footer>
				<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span> <span class="text-bold text-uppercase">Festival de Danza Jazz</span>. <span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->

		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= base_url();?>assets/vendor/modernizr/modernizr.js"></script>
		<script src="<?= base_url();?>assets/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="<?= base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="<?= base_url();?>assets/vendor/switchery/switchery.min.js"></script>
		<script src="<?= base_url();?>assets/vendor/selectFx/classie.js"></script>
		<script src="<?= base_url();?>assets/vendor/selectFx/selectFx.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="<?= base_url();?>assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="<?= base_url();?>assets/js/form-wizard.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();

			});



		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
