<div class="menu">
	<button class='add_ticket_btn'>
		<i class="fa fa-plus" aria-hidden="true"></i>
		Nieuwe ticket aanmaken
	</button>

	<?php if($_SESSION['role'] == 3) : ?>
		<a href="tickets.php?open=true" >
			<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
			Openstaande tickets
		</a>
		<a href="tickets.php?open=false" >
			<i class="fa fa-check" aria-hidden="true"></i>
			Afgehandelde tickets
		</a>
		<a href="tickets.php" >
			<i class="fa fa-globe" aria-hidden="true"></i>
			Alle tickets
		</a>
	<?php endif; ?>
</div>