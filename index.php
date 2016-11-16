<?php 
	$title = "Home";
	include('includes/header.php'); 
?>
	<div class="content">

		<?php include('includes/add_ticket.php'); ?>
		<div class="wrapper">
			<div class="row">
				<div class="col col-2">
					<?php include('includes/side_menu.php'); ?>
				</div>

				<div class="col col-10">
					<?php include('includes/tickets_overview.php'); ?>
				</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>