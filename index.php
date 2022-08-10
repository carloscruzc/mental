<?php 
	include 'url_amigable.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>MENTAL - Página Principal</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/Icono.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/css/lista-desplegable.css" />

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
</head>

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="home">
				<img class="logo-head" src="assets/images/header.png" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
					
					<li class="nav-item dropdown"><a class="dropdown-item" href="home">Inicio</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="programa-academico">Programa Académico</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="eventos-sociales">Eventos Sociales</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="menu-list">Menú</a></li>
					<li class="nav-item dropdown"><a class="dropdown-item" href="profesores">Profesores</a></li>

					<!-- Nav item 1 Demos -->
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Páginas</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="menu-list.html">Menú</a></li>
							<li> <a class="dropdown-item" href="programa-academico.html">Programa Académico</a></li>
							<li> <a class="dropdown-item" href="eventos-sociales.html">Eventos Sociales</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main Banner START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Slider START -->
				<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
					<div class="tiny-slider-inner" data-autoplay="false" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
						
						<!-- Card item START -->
						<div class="card overflow-hidden h-500px h-md-600px text-center rounded-0" style="background-image:url(assets/images/university/programa-academico.png); background-position: center; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-0"></div>
							<!-- Card image overlay -->
              				<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
								<div class="w-100 my-auto">
									<div class="row justify-content-center">
										<div class="col-11 col-lg-6">
											<br><br><br><br><br><br><br><br><br><br><br><br><br>
											<a href="programa-academico" class="btn btn-danger mb-0">Consultar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

						<!-- Card item START -->
						<div class="card overflow-hidden h-500px h-md-600px text-center rounded-0" style="background-image:url(assets/images/university/eventos-sociales.png); background-position: center; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-0"></div>
							<!-- Card image overlay -->
              				<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
								<div class="w-100 my-auto">
									<div class="row justify-content-center">
										<div class="col-11 col-lg-6">
											<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
											<a href="eventos-sociales" class="btn btn-warning mb-0">Visitar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

						<!-- Card item START -->
						<div class="card overflow-hidden h-500px h-md-600px text-center rounded-0" style="background-image:url(assets/images/university/alimentos-bebidas.png); background-position: center; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-0"></div>
							<!-- Card image overlay -->
              				<div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
								<div class="w-100 my-auto">
									<div class="row justify-content-center">
										<div class="col-11 col-lg-6">
											<!-- Button -->
											<br><br><br><br><br><br><br><br><br><br><br><br><br>
											<a href="menu-list" class="btn btn-success mb-0">Ver Menú</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
				<!-- Slider END -->
			</div>
		</div>
	</div>

	
</section>
<!-- =======================
Main Banner END -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

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
					<img class="light-mode-item" src="assets/images/footer.png" alt="logo" style="max-width: -webkit-fill-available;">
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
					<div class="text-primary-hover"> Copyrights ©2022 <a href="https://grupolahe.com/" class="text-body">Soft by Creative Grupo LAHE</a>. Todos los derechos reservados. </div>
					<!-- copyright links-->
					<div class=" mt-3 mt-md-0">
						<ul class="list-inline mb-0">
							<li class="list-inline-item">
								<!-- Language selector -->
								<div class="dropup mt-0 text-center text-sm-end">
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German </a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
									</ul>
								</div>
							</li>
							<li class="list-inline-item"><a class="nav-link pe-0" href="#">Politica de privacidad</a></li>
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
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>