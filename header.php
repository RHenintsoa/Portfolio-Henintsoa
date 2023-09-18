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
    <!-- ======= Header ======= -->
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
					<a href="about.php" class="nav-link" > About </a>
					<a href="portfolio.php" class="nav-link"> Portfolio </a>
					<a href="contact.php" class="nav-link"> Contact </a>
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
	<!-- =======  End Header ======= -->
</body>

