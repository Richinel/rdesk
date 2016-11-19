<?php
error_reporting(0);
include('dbconnect.php');

$subject 	= $_POST['subject'];
$msg	 	= $_POST['msg'];
$time		= time();
$uid		= $_POST['uid'];

$conn->query("INSERT INTO tickets(subject, created_by, msg, postdate) VALUES('$subject', '$uid', '$msg', '$time')");

header("Location: ../tickets.php");

?>