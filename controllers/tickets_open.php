<?php
//error_reporting(0);
include('dbconnect.php');

if (isset($_GET['open']) && $_GET['open'] === 'true'){
	$sql 	= "SELECT * FROM tickets WHERE status = 'openstaand' AND deleted = 0 ORDER BY postdate DESC";
	$result	= $conn->query($sql);
} elseif (isset($_GET['open']) && $_GET['open'] === 'false') {
	$sql 	= "SELECT * FROM tickets WHERE status = 'afgehandeld' AND deleted = 0 ORDER BY postdate DESC";
	$result	= $conn->query($sql);
} elseif (isset($_GET['tid'])) {
	if ($_GET['action'] === 'respond') {

	} else {
		if($_SESSION['role'] == 3 && $_GET['action'] === 'delete') { 
			$tid 		= $_GET['tid'];
			$sql 		= "UPDATE tickets SET deleted = 1 WHERE ticket_id = '$tid'";
			$result 	= $conn->query($sql);

			header('Location: tickets.php');
		} elseif($_SESSION['role'] == 3 && $_GET['action'] === 'done') {

			$tid 		= $_GET['tid'];
			$sql 		= "UPDATE tickets SET status = 'afgehandeld' WHERE ticket_id = '$tid'";
			$result 	= $conn->query($sql);

			header('Location: tickets.php');
		} else {
			echo "<div class='alert'>Je gegevens kloppen niet. Ga terug en probeer het nog een keer</div>";
		}
	}
}

else {
	$sql 	= "SELECT * FROM tickets WHERE deleted = 0 ORDER BY postdate DESC";
	$result	= $conn->query($sql);
}



?>