<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./assets/img/logo.jpg">
		<!-- css--> 	
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<!-- bootstrap css files--> 
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap-icons/bootstrap-icons.css">
	<title>Henintsoa</title>
</head>
<body>
	<!-- ======= Header 
	<header>
		<nav class="navbar navbar-expand-lg navbar-expand-md fixed-top navbar-light bg-dark">
			<div class="container">
			  <a class="navbar-brand" href="#">Henintsoa</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#list-menu" aria-controls="list-menu" aria-label="Toggle navigation">
				<span class="bi bi-list"></span>
			  </button>
			  <div class="collapse navbar-collapse menu" id="list-menu">
				<div class="navbar-nav">
					<a href="index.html" class="nav-link"> Home </a>
					<a href="about.html" class="nav-link" > About </a>
					<a href="#" class="nav-link active" aria-current="page"> Portfolio </a>
					<a href="contact.html" class="nav-link"> Contact </a>
					<button  class="btn btn-light" id="openModalBtn">Download CV</button>
					<div id="myModal" class="modal">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-body">
									<p>Souhaiteriez- vous téléchrager mon CV?</p>
									<div class="modalBtn">
										<button class="btn btn-info" id="downloadBtn">Confirmer</button>
										<button  class="btn btn-light" id="cancelBtn">Annuler</button>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		</nav>
	</header>
	=======  End Header ======= -->
	<?php 
	 	include ('header.php');
	?>

		<!-- =======  Main ======= -->
	<div class="container main">
		<div class="row">
			<section class="title">
				<h2>PORTFOLIO</h2>
				<label>My realisations</label>
			</section>
		</div>	
		<div class="row" id="line-portfolio">
			<h3 class="text-center" id="myummy-title"> Myummy</h3>
			<div class="col-lg-6 col-md-12 col-xs-12">
				<img src="./assets/img/realisations/img1.jpg" class="img-fluid" alt="myummy">
			</div>
			<div class="col-lg-6 col-md-12 col-xs-12">
				<img src="./assets/img/realisations/img2.jpg" class="img-fluid" alt="myummy">
			</div>
		</div>
		<div class="row" id="line-portfolio">
			<h3 class="text-center" id="burger-title"> <a href="https://github.com/RHenintsoa/BURGER-CODE">Burger Code</a> </h3>
			<div class="col-lg-6 col-md-12 col-xs-12">
				<img src="./assets/img/realisations/img5.png" class="img-fluid" alt="burgercode">
			</div>
			<div class="col-lg-6 col-md-12 col-xs-12">
				<img src="./assets/img/realisations/img6.png" class="img-fluid" alt="burgercode">
			</div>
		</div>
		<div class="row" id="line-portfolio">
			<h3 class="text-center" id="web-title">Web Evaluation</h3>
			<div class="col-lg-6 col-md-12 col-xs-12">
				<img src="./assets/img/realisations/img9.jpg" class="img-fluid" alt="web">
			</div>
			<div class="col-lg-6 col-md-12 col-xs-12">
				<img src="./assets/img/realisations/img10.jpg" class="img-fluid" alt="web">
			</div>
			
		</div>
	</div>
		<!-- ======= End Main ======= -->	
		<!-- script-->
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/index.js"></script>
	<script type="text/javascript" src="./assets/bootstrap/bootstrap5/js/bootstrap.min.js"></script>
</body>
</html>