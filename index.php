<?php 
	$title = "Home";
	include('includes/header.php'); 
?>
	<div class="content">
		<div class="wrapper">
			<div class="login_form">
					<h3>Inloggen | RDesk</h3>
					<form method="post" action="controllers/login.php" class="form">
						<div class="form-item">
					        <label>E-mailadres</label>
					        <input type="email" name="email" class="width-100" required="required">
					    </div>

					    <div class="form-item">
					        <label>Wachtwoord</label>
					        <input type="password" name="password" class="width-100" required="required">
					    </div>

					    <div class="form-item">
					    	<div class="row">
					    		<div class="col">
						        	<button class="button primary">Inloggen</button>
						        </div>
						        <div class="col">
						        	<div class="button cancel_btn">Annuleren</div>
						        </div>
					        </div>
					    </div>
					</form>

					<p>
						Geen account? <span class="register clickable"><strong>Registreer je dan hier!</strong></span>
					</p>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>