<?php 
	session_start();

	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = '') {
		echo 'Usted no es una lady';
		die ();
	}

	session_destroy();
	header("Location:login.html")
?>