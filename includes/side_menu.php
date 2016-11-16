<div class="menu">
	<p class='add_ticket_btn'>
		<i class="fa fa-plus" aria-hidden="true"></i>
		Nieuwe ticket aanmaken
	</p>

	<?php if($_SESSION['role'] == 3) : ?>
		<p>
			<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
			Openstaande tickets
		</p>
		<p>
			<i class="fa fa-check" aria-hidden="true"></i>
			Afgehandelde tickets
		</p>
		<p>
			<i class="fa fa-globe" aria-hidden="true"></i>
			Alle tickets
		</p>
	<?php endif; ?>
</div>