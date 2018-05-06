<div id="header-wrapper">
	<div id="header">
		<!-- Logo -->
			<header>
				<a href="index.php"><img alt="photo de moi" src="images/moi.png"></a>
				<h1>Anne-Marie PLANTARD SOPHROLOGUE</h1>
				<img id="logo_photo" alt="mon logo" src="images/logoHumain.png">
			</header>
		<!-- Nav -->
			<nav id="nav">
				<ul>
					<li<?php if ($page == "index") { echo " class=\"current\"";} ?>><a href="index.php">Accueil</a></li>
					<li<?php if ($page == "presentation") { echo " class=\"current\"";} ?>><a href="presentation.php">Presentation</a></li>
					<li<?php if ($page == "sophro") { echo " class=\"current\"";} ?>><a href="la_sophrologie.php">La Sophrologie</a></li>
					<li<?php if ($page == "deroulement") { echo " class=\"current\"";} ?>><a href="deroulement.php">Deroulement</a></li>
					<li<?php if ($page == "groupe") { echo " class=\"current\"";} ?>><a href="groupe.php">Prestations</a></li>
					<li<?php if ($page == "contact") { echo " class=\"current\"";} ?>><a href="contact.php">Contacts</a></li>
					<li<?php if ($page == "partenaires") { echo " class=\"current\"";} ?>><a href="partenaires.php">Partenaires</a></li>
				</ul>
			</nav>
	</div>
</div>