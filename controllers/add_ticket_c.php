<?php
error_reporting(0);
include('dbconnect.php');

$subject 	= $_POST['subject'];
$msg	 	= $_POST['msg'];

$conn->query("INSERT INTO tickets(subject, msg) VALUES('$subject', '$msg')");

header("Location: ../index.php");

?>