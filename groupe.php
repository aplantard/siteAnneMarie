<?php
	$page ="groupe";
?>
<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>La Sophrologie</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="icon" type="image/png" href="images/logoHumain.png" />
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<?php
					require('header.php');
				?>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<!-- Content -->
							<article class="box post">
								<h2 class="invisible">header</h2>
								<section class="prestation">
								<h3>Séance Individuelle</h3>
								<ul>
									<li>Adulte</li>
									<li>Adolescent - Étudiant</li>
									<li>Enfant</li>
								</ul>
								</section>
								<section class="prestation">
									<h3>Séance de Groupe</h3>
									<p>Jeudi soir à 19 heures</p>
								</section>
								<h4 id="rdv">sur rendez-vous du lundi au vendredi</h4>
								<?php
									require('banniere.php');
								?>
							</article>

					</div>
				</div>

			<!-- Footer -->
				<?php
					require('footer.php');
				?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="assets/js/jssor.slider.mini.js"></script>
			<script type="text/javascript" src="assets/js/slide.js"></script>

	</body>
</html>