<?php 
	$title = "Home";
	include('includes/header.php'); 
?>
	<div class="content">
		<div class="wrapper">
			<fieldset class="login_form">
				<legend>Inloggen | RDesk</legend>
					<form method="post" action="controllers/login.php" class="form">
						<div class="form-item">
					        <label>E-mailadres</label>
					        <input type="email" name="email" class="width-100">
					    </div>

					    <div class="form-item">
					        <label>Wachtwoord</label>
					        <input type="password" name="password" class="width-100">
					    </div>

					    <div class="form-item">
					        <button class="button primary">Inloggen</button>
					        <div class="button cancel_btn">Annuleren</div>
					    </div>
					</form>

					<p>
						Geen account? <span class="register clickable"><strong>Registreer je dan hier!</strong></span>
					</p>
			</fieldset>
		</div>
	</div>

<?php include('includes/footer.php'); ?>