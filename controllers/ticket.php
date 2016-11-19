<?php
	include('tickets_open.php');

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$uid 			= $row['created_by'];
			$sql			= "SELECT first_name FROM users WHERE user_id = $uid";
			$name			= $conn->query($sql);
			$name 			= $name->fetch_assoc();
			$name 			= $name['first_name'];

			echo 
			"
				<div class='ticket'>
					<div class='ticket_title'>
						".$row['ticket_id']." | ".$row['subject']."
						<span class='date'>".sortDate($row['postdate'])."</span>
					</div>
						<span class='label outline'>".$name."</span>
						<hr>
					<div class='ticket_body'>
						".$row['msg']."
					</div>
				";

			if($_SESSION['role'] == 3) {
				echo 
				"
					<hr>
					<div class='ticket-btns'>
						<a href='tickets.php?tid=".$row['ticket_id']."&action=respond' title='Reageren'><i class='fa fa-reply' aria-hidden='true'></i></a>
						<a href='tickets.php?tid=".$row['ticket_id']."&action=delete' title='Verwijderen'><i class='fa fa-trash' aria-hidden='true'></i></a>
						<a href='tickets.php?tid=".$row['ticket_id']."&action=done' title='Afgehandeld'><i class='fa fa-check' aria-hidden='true'></i></a>
					</div>
				";
			}

			echo "</div>";		
		}
	} 

?>