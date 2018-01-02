<?php 
	session_start();

	$varsesion = $_SESSION['usuario'];
	$varsesion = $_SESSION['password'];

	if($varsesion == null || $varsesion = '') {
		echo 'Usted no es una lady';
		die ();
	}

?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel</title>




</head>
<body>
	<h1>Panel de administración</h1>
	<h3>Bienvenido: <?php echo $_SESSION['usuario'] ?> </h3>
	<a href="logout.php">Cerrar Sesión</a>
</body>
</html>