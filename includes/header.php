<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?> | RDesk</title>

	<meta name="viewport" content="width=device-width, maximum-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/kube.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="icon" type="image/png" href="./favicon.png" />

	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/visuals.js"></script>

</head>
<body>

<?php
session_start();

	if(ISSET($_SESSION['email'])) {
		
		include('includes/nav_loggedin.php');
		include('includes/sortdate.php');

		// if($_SESSION['rights'] == 3) {
		// 	include('admin_panel.php');
		// }
	}
	else {
		include('includes/nav.php');
	}
?>
	
