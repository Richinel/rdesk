<?php
	include('dbconnect.php');

	$sql 	= "SELECT * FROM tickets";
	$result	= $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo 
			"
				<div class='ticket'>
					<div class='ticket_title'>
						".$row['ticket_id']." | ".$row['subject']."
						<span class='date'>".$row['date']."</span>
					</div>
						<hr>
					<div class='ticket_body'>
						".$row['msg']."
					</div>
					<div class='ticket-btns'>
						<button>Reageren</button>
						<button>Verwijderen</button>
						<button>Afgehandeld</button>
					</div>
				</div>	
			";
		}
	} 

?>