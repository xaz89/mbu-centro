<?php 


	

	session_start();



	$usuario =$_POST['usuario'];
	$password=$_POST['password'];

	$_SESSION['usuario']=$usuario;
	$_SESSION['password']=$password;



	if($varsesion == null || $varsesion = '') {
		echo 'Usted no es una lady...Lléguele';
		die ();
	}

?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="MBU Zona Centro | Ciudad de México, Hidalgo, Estado de México">
	<meta name="author" content="Jazmín Isol Prado">
	<title>MBU | Zona Centro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">


</head>
<body>
	<div class="forma" id="cofradia" >
		
		<header class="forma menu">
			<nav class="forma ">
				<div class="vein-cin logotipo left ">
					<a href="#">MBU Zona Centro</a>
				</div>
				<div class="set-cin">
					<div class="cin-menu right menu txt-center">
						<a href="agenda.html">Agenda</a>
						<a href="estructura.html">Estructura</a>
						<a href="glosario.html">Glosario</a>
						<a href="index.html">Log Out</a>
					</div>
				</div>
			</nav>
		</header>



		
			
			
			    
			   
			
		
		
		
		

		<div id="cofradia" class="forma"> 
				<div class="contenedor centrado">
					
					<h1>Glosario</h1>

					
					
					<div class="cin">
						<div class="forma">
							<div class="nov centrado-devices">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto placeat et ipsam ullam, fugiat consectetur id. Inventore tenetur, ratione harum. Esse aut pariatur quisquam quas deserunt temporibus, aperiam itaque laudantium.</p>
								<p>Omnis dolorum voluptatibus, non veniam error ipsa debitis harum aspernatur qui incidunt dicta, iusto officiis doloribus illum autem eveniet porro officia eum ex id exercitationem fugit! Recusandae nobis, facilis expedita!</p>								
							</div>

						</div>
					</div>


					<div class="cin">
						<img src="img/mbu1.jpg" width="100%"></img>
					</div>
				
				</div>
		</div>
		<footer>
			<div class="forma padding-b50 padding-t50"> 
				<div class="contenedor centrado">
					<div class="forma">
						<div class="diez centrado">
							<a href="index.html">
								<img src="img/logo-mbu.svg" width="100%" alt="">
							</a>
						</div>
						<div class="txt-center">
							<h3>Somos unas chicas bien buen pedo</h3>
							<p>Diseño y maquetación <a href="http://isoldesign.tumblr.com/web" target="_blank">Soy la Xaz</a></p>
							<small class="small">Todos los derechos reservados</small>
							<p><a href="https://www.facebook.com/groups/372789066388464/" target="_blank"><img src="img/face.svg" class="social"></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>