<?php 
	session_start();

	$varsesion = $_SESSION['usuario'];
	$varsesion = $_SESSION['password'];

	
	
	
	if($varsesion == null || $varsesion = '') {
		echo 'conio';
		die ();
	}

	session_destroy();
	header("Location:login.html")
?>