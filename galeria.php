<!DOCTYPE html>
<html lang="es">

<head>
	<title>MENTAL - Galería</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/Icono_2.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/lista-desplegable.css" />

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

	<!-- Header START -->
	<header class="navbar-light navbar-sticky header-static">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand" style="margin: 0px;" href="galeria">
					<img class="logo-head" src="assets/images/header_3.png" alt="logo">
					<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-animation">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>

				<!-- Main navbar START -->
				<div class="navbar-collapse w-100 collapse" id="navbarCollapse" style="margin-right: 12%;">

					<!-- Nav Main menu START -->
					<ul class="navbar-nav navbar-nav-scroll mx-auto">
						<!-- <li class="nav-item dropdown"><a class="dropdown-item" href="home">Inicio</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="programa-academico">Programa Académico</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="eventos-sociales">Eventos Sociales</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="menu-list">Menú</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="profesores">Profesores</a></li> -->
						<li class="nav-item dropdown"><a class="dropdown-item" href="galeria">Galeria</a></li>
					</ul>
					<!-- <div id="adium-nb" class="navbar-brand">
					<img id="adium" src="assets/images/adium.png" alt="logo">
				</div> -->
				</div>
			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- =======================
Page Banner START -->
<style>
	.gradiente{
		background: linear-gradient(90deg, rgba(255,241,153,1) 0%, rgba(211,80,21,1) 35%, rgba(156,214,246,1) 70%, rgba(234,155,195,1) 100%);
	}
</style>
		<section class="bg-dark b-shadow align-items-center d-flex"
			style="">

			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="p-4 text-center rounded-3">
							<h1 class="text-white m-0">Galería</h1>
							<!-- Breadcrumb -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Page Banner END -->

		<!-- =======================
Inner part START -->
		<section class="pt-4">
			<div class="container">

				<!-- Instructor list START -->
				<div class="row g-4 justify-content-center">

					<!-- Card item START -->
					<?php
						for ($i = 1; $i < 299; $i++):
						// Convertir el número a una cadena de texto
						$numeroString = (string) $i;
						// Anexar ceros a la izquierda hasta que tenga una longitud de 3
						$numeroString = str_pad($numeroString, 3, '0', STR_PAD_LEFT);
						?>
						<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
							<div class="card card-body">
								<img src="assets/images/img-download-2024/Mental health_<?= $numeroString ?>.jpg" class="img-fluid" alt=""
									srcset="">
								<a href="assets/images/img-download-2024/Mental health_<?= $numeroString ?>.jpg" download class="btn"
									style="color:white;background-color: #AF1352;" target="_blank"
									rel="noopener noreferrer">Descargar</a>
							</div>
						</div>
					<?php endfor; ?>
					<!-- Card item END -->
				</div>
			</div>
		</section>
		<!-- =======================
Inner part END -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- =======================
Footer START -->
	<footer class="pt-5 bg-light">
		<div class="container">
			<!-- Row START -->
			<div class="row g-4">

				<!-- Widget 1 START -->
				<div class="col-lg-3">
					<!-- logo -->
					<a class="me-0" href="home">
						<img class="light-mode-item" src="assets/images/header_2.png" alt="logo"
							style="max-width: -webkit-fill-available;">
					</a>
					<p class="my-3"></p>

				</div>
				<!-- Widget 1 END -->

				<!-- Widget 2 START -->
				<div class="col-lg-6">
					<div class="row g-4">

						<!-- Link block -->
						<!-- <div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Comunidad</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">Documentacion</a></li> -->
						<!-- <li class="nav-item"><a class="nav-link" href="#">Foro</a></li> -->
						<!-- <li class="nav-item"><a class="nav-link" href="#">Mapa de sitio</a></li> -->
						<!-- <li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
						</ul>
					</div> -->

						<!-- Link block -->
						<!-- <div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">Profesores</h5>
						<ul class="nav flex-column" id="menu">
							<li class="nav-item">
								<input type="checkbox" name="list" id="profesores">
								<label for="profesores">Profesores</label>
								<ul id="interior" class="nav flex-column" style="padding-left: 15%;">
									<li class="nav-item"><a class="nav-link" href="#">Profesor 1</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Profesor 2</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Profesor 3</a></li>
							   </ul>
							</li>
						</ul>
					</div> -->
					</div>
				</div>
				<!-- Widget 2 END -->

				<!-- Widget 3 START -->
				<!-- <div class="col-lg-3">
				<h5 class="mb-2 mb-md-4">Contacto</h5>
				Time
				<p class="mb-2">
					Toll free:<span class="h6 fw-light ms-2">+1234 568 963</span>
					<span class="d-block small">(9:AM to 8:PM IST)</span>
				</p>

				<p class="mb-0">Email:<span class="h6 fw-light ms-2">example@gmail.com</span></p>

				
			</div>  -->
				<!-- Widget 3 END -->
			</div><!-- Row END -->

			<!-- Divider -->
			<hr class="mt-4 mb-0">

			<!-- Bottom footer -->
			<div class="py-3">
				<div class="container px-0">
					<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
						<!-- copyright text -->
						<div class="text-primary-hover"> Copyrights ©2022 <a href="https://grupolahe.com/"
								class="text-body">Soft by Creative Grupo LAHE</a>. Todos los derechos reservados. </div>
						<!-- copyright links-->
						<div class=" mt-3 mt-md-0">
							<ul class="list-inline mb-0">
								<li class="list-inline-item">
									<!-- Language selector -->
									<div class="dropup mt-0 text-center text-sm-end">
										<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
											<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
														src="assets/images/flags/uk.svg" alt="">English</a></li>
											<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
														src="assets/images/flags/gr.svg" alt="">German </a></li>
											<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
														src="assets/images/flags/sp.svg" alt="">French</a></li>
										</ul>
									</div>
								</li>
								<li class="list-inline-item"><a class="nav-link pe-0" href="#">Politica de
										privacidad</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- =======================
Footer END -->

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<!-- Bootstrap JS -->
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="assets/vendor/choices/js/choices.min.js"></script>

	<!-- Template Functions -->
	<script src="assets/js/functions.js"></script>

</body>

</html>