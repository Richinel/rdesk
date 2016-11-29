<div class="add_form" id='addTicket'>

	<div class="form_div">	
		<h3>Ticket aanmaken</h3>


		<form method="post" action="controllers/add_ticket_c.php" class="form">
			<div class="form-item">
		        <label>Onderwerp</label>
		        <input type="text" name="subject" class="width-100" autocomplete="off" required="Dit veld is veplicht">
		    </div>

		    <div class="form-item">
		    	<label>Beschrijving van het probleem</label>
		        <textarea name="msg" rows="6" required="Dit veld is veplicht" autocomplete="off"></textarea>
		    </div>

		    <input type='hidden' name='uid' value="<?php echo $_SESSION['user_id']; ?>">

		    <div class="form-item">
		        <div class="row">
		        	<div class="col">
		        		<button class="accept_btn">Aanmaken</button>
		        	</div>
		        	<div class="col">
		        		<div class="cancel_btn" id='addTicketCancel'>Annuleren</div>
		        	</div>
		        </div>
		    </div>

		</form>
	</div>
</div>