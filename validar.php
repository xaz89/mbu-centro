<?php


	
	session_start();

	$usuario =$_POST['usuario'];
	$password=$_POST['password'];

	$_SESSION['usuario']=$usuario;
	$_SESSION['password']=$password;
	

	//Inicia conexión a la BD 

	$conexion=mysqli_connect("localhost", "id3414937_soylaxaz", "mbucentro", "id3414937_mbu");
	//$conexion=mysqli_connect("localhost", "root", "", "mbu-centro");

	
	$consulta="SELECT * FROM login WHERE usuario='$usuario' and password='$password' ";
	$resultado=mysqli_query($conexion, $consulta);

	$filas=mysqli_num_rows($resultado);

	if ($filas>0) {
		header("location:panel.php");
	}

	else {
		echo "Usted no es una lady...lléguele";
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);


	//Termina conexión a la BD

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Validar</title>
</head>
<body>
	
</body>
</html>