<div class="head_nav">
	<div class="wrapper">
		<img src="assets/images/rdesk_logo_white.png">

		<ul>
			<li>Welkom <?php echo $_SESSION['first_name']; ?></li>
			<li>Help</li>
			<li class='logoff clickable' onclick="window.location.href = './controllers/logout.php';">
				<span>
					<i class="fa fa-power-off" aria-hidden="true"></i>
				</span>
			</li>
		</ul>
	</div>
</div>