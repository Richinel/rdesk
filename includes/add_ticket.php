<div class="add_form">

	<div class="form_div">	
		<h3>Ticket aanmaken</h3>
		<form method="post" action="controllers/add_ticket_c.php" class="form">
			<div class="form-item">
		        <label>Onderwerp</label>
		        <input type="text" name="subject" class="width-100">
		    </div>

		    <div class="form-item">
		    	<label>Beschrijving van het probleem</label>
		        <textarea name="msg" rows="6"></textarea>
		    </div>

		    <div class="form-item">
		        <button class="button primary">Aanmaken</button>
		        <div class="button cancel_btn">Annuleren</div>
		    </div>

		</form>
	</div>
</div>