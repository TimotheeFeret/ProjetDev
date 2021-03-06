<?php require('../controleurs/ctrl_topbar.php') ?>
<div class="topbar">
	<a class="topbar-logo"></a>
	<nav class="topbar-menu">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li class ="dropdown">
				<a class="dropbtn" href="vue_discipline.php?cat=jonglage">Jonglage</a>
				<div id="jonglage-dropdown" class= "dropdown-content">
					<a href="vue_discipline.php?cat=jonglage#Bolas">Bolas</a>
					<a href="vue_discipline.php?cat=jonglage#Contact">Contact</a>
					<a href="vue_discipline.php?cat=jonglage#Staff">Staff</a>
				</div>
			</li>
			<li><a href="vue_discipline.php?cat=flux#FlipyFlux">FlipyFlux</a></li>
			<li class ="dropdown">
				<a class="dropbtn" href="vue_discipline.php?cat=light">Light Toys</a>
				<div id="jonglage-dropdown" class= "dropdown-content">
					<a href="vue_discipline.php?cat=light#Orbit">Orbit</a>
					<a href="vue_discipline.php?cat=light#Light%20gloves">Gloves</a>
					<a href="vue_discipline.php?cat=light#buugeng">Buugeng</a>
				</div>
			</li>
			<li><a href="vue_galerie.php">Gallerie</a></li>
			<?php  if (isset($_SESSION['pseudo']) && $estAdmin == 1) {
				echo '<li><a href="vue_admin.php">Admin</a></li>';
			}
			?>
		</ul>
	</nav>
	<!-- si $session is set alors on affiche le pseudo suivi du btn déconnexion
		 sinon on affiche les btn inscription et connexion -->
	<div class="topbar-right">
		<?php if (isset($_SESSION['pseudo'])) { ?>
				 <span class="pseudo-topbar"> <?php echo $_SESSION['pseudo'] ?> </span><a style="margin-left: 15px" id ="btn_deco" class="btn"
				       href="../controleurs/ctrl_deconnexion.php">Deconnexion</a>
		<?php } else { ?>
					<a class="btn" href="vue_inscription.php">S'inscrire</a>
					<a class="btn" href="vue_connexion.php">Se connecter</a>
		<?php } ?>
	</div>
</div>