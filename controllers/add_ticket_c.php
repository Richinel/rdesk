<?php
error_reporting(0);
include('dbconnect.php');

$subject 	= $_POST['subject'];
$msg	 	= $_POST['msg'];
$first_name	= $_SESSION['first_name'];

$conn->query("INSERT INTO tickets(subject, created_by, msg, priority, status) VALUES('$subject', '$first_name', '$msg', 1, 'openstaand')");

header("Location: ../tickets.php");

?>