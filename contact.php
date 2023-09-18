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
					<a href="portfolio.html" class="nav-link"> Portfolio </a>
					<a href="#" class="nav-link active" aria-current="page"> Contact </a>
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
	 End Header ======= -->
 	<?php 
	 	include ('header.php');
	?>

		<!-- =======  Main ======= -->
	<div class="container main">
		<div class="row">
			<section class="title">
				<h2>CONTACT</h2>
				<label>Contact me</label>
			</section>
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="icon-box">	
					
					<span class="bi bi-geo-alt-fill" id="icon-contact"></span>
					<span>My Address</span>
					<p class="my-contact"> Lot IVF 98 A Tana VI Madagascar</p>
				</div>
				<div class="icon-box">	
					<span class="bi bi-envelope" id="icon-contact"></span>
					<span>Email</span>
					<p class="my-contact">henintsoarasolofohery@gmail.com</p>
				</div>
			</div>
			<div class="col-lg-6">
				
				<div class="icon-box">	
						
						<span class="bi bi-share-fill" id="icon-contact"></span>
						<span>Social Profiles</span>
						<p class="my-contact">
							<a href="https://github.com/RHenintsoa">
								<span class="bi bi-github"id="social-profiles"></span>
							</a>
							<a href="https://www.linkedin.com/in/henintsoa-rasolofohery-02853a213?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BEi1KTrunQ%2FSRBUvhPgMXNg%3D%3D">
								<span class="bi bi-linkedin" id="social-profiles"></span>
							</a> 
							<a href="live:.cid.71553ea017ae8b89">
								<span class="bi bi-skype" id="social-profiles"></span>
							</a>
							
						</p>
						
				</div>
				<div class="icon-box">	
					<span class="bi bi-telephone-fill" id="icon-contact"></span>
					<span class="bi bi-whatsapp" id="icon-contact"></span>
					<span>Call me </span>
					<p> +261 34 72 552 36</p>
				</div>
			</div>
		</div>
				
	</div>

	
		<!-- =======  End Main======= -->
</body>
</html>