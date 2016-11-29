<?php
//error_reporting(0);
include('dbconnect.php');
include('tickets_open.php');

$ticket_id = $_SESSION['ticket_id'];

$sql("SELECT * FROM tickets WHERE ticket_id = $ticket_id");

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo 
		"
			<div class='ticket_title'>
				".$row['ticket_id']." | ".$row['subject']."
				<span class='date'>".sortDate($row['postdate'])."</span>
			</div>
				<span class='outline'>".$name."</span>

			<div class='ticket_content'>
				<hr>
				<div class='ticket_body'>
					".$row['msg']."
				</div>
		";
	}
}

?>