	<?php require_once("vue_head.php"); ?>
	<body>
		<?php require_once("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Inscription</h1>
			</div>
		</div>
		<div id="main">
			<div class="container container-form">
				<div class="form-group">
					<input class="form-control form-control-selectable" type="text" name="pseudo" id="user_username" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus" maxlength="45">
				</div>
				<div class="form-group">
					<input class="form-control form-control-selectable" type="password" name="password" id="password" placeholder="Mot de passe" required="required" autofocus="autofocus" maxlength="45">
				</div>
				<div class="form-group">
					<input class="form-control form-control-selectable" type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirmer mot de passe" required="required" autofocus="autofocus">
				</div>
				<input id="btn_inscription" class="btn btn_block form-control-selectable" type="button" name="commit" value="s'inscrire" onclick="inscriptionVerifIdentifiants()">
				</input>
			</div>
		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>