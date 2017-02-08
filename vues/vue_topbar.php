<div class="topbar">
	<a class="topbar-logo"></a>
	<nav class="topbar-menu">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li class ="dropdown">
				<a class="dropbtn" href="vue_categorie.php">Jonglage</a>
				<div class= "dropdown-content">
					<a href="vue_discipline.php">Bolas</a>
					<a href="vue_discipline.php">Contact</a>
					<a href="vue_discipline.php">Poi</a>
				</div>
			</li>
			<li><a href="vue_discipline.php">FlipyFlux</a></li>
			<li><a href="vue_discipline.php">FlowToys</a></li>
			<li><a href="vue_contact.php">Contact</a></li>
		</ul>
	</nav>
	<!-- if $session is set alors on affiche le pseudo a la place -->
	<div class="topbar-right">
		<?php if (isset($_SESSION['pseudo'])) {
				  echo $_SESSION['pseudo'] ?> <a style="margin-left: 15px" id ="btn_deco" class="btn" onclick="deconnexion()" href="../controleurs/ctrl_deconnexion.php">Deconnexion</a>
			<?php } else { ?>
					<a class="btn" href="vue_inscription.php">S'inscrire</a>
					<a class="btn" href="vue_connexion.php">Se connecter</a>
			<?php } ?>
	</div>
</div>