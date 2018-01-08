<?php 


	

	session_start();



	$varsesion = $_SESSION['usuario'];
	$varsesion = $_SESSION['password'];



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
	<link href="favicon.png" type="image/png" rel="icon" title="mbu">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Quicksand|Indie+Flower" rel="stylesheet">
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
						<a href="#agenda">Agenda</a>
						<a href="#estructura">Estructura</a>
						<a href="#glosario">Glosario</a>
						<a href="logout.php">Log Out</a>
					</div>
				</div>
			</nav>
		</header>




<body>
	<div class="forma centrado">
		<div class="txt-center">	
			<h1 class="padding-t50">Panel de administración</h1>
			<h3>Bienvenida lady <?php echo $_SESSION['usuario'] ?> </h3>
			<button class="boton centrado-devices"><a href="logout.php">Log out</a></button>
			
		</div>


<div id="agenda" class="forma"> 
				<div class="contenedor centrado">


					
					<h1>Agenda</h1>

					<div class="cin">
								<div class="forma">
									<div class="nov centrado-devices">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto placeat et ipsam ullam, fugiat consectetur id. Inventore tenetur, ratione harum. Esse aut pariatur quisquam quas deserunt temporibus, aperiam itaque laudantium.</p>
																		
									</div>

								</div>
							</div>


					<div class="cin">
						<div class="forma">
									<div class="nov centrado-devices">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto placeat et ipsam ullam, fugiat consectetur id. Inventore tenetur, ratione harum. Esse aut pariatur quisquam quas deserunt temporibus, aperiam itaque laudantium.</p>
																		
									</div>

								</div>
					</div>

					

					<iframe src="https://calendar.google.com/calendar/embed?title=Agenda%20MBU-Centro&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=agenda.mbucentro%40gmail.com&amp;color=%2342104A&amp;ctz=America%2FMexico_City" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>


					
					
							
				
				</div>
</div>


<div id="estructura" class="forma"> 
		<div class="contenedor centrado">
			<div class="forma">

					
					<h1 class="margin-t50 margin-b50">Estructura</h1>
									
				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Líder</h3>
						<p><i>Lucero Urbina</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Tesorera</h3>
						<p><i>Ross Román</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Secretaria</h3>
						<p><i>Reyna Soto</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Relaciones públicas</h3>
						<p><i>Nallely Magaña</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Agenda</h3>
						<p><i>Luzy Hernández</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Estadística</h3>
						<p><i>Andy y Karime</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Pedidos</h3>
						<p><i>Aledi</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Capitana de ruta</h3>
						<p><i>Lucero Urbina</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Área creativa</h3>
						<p><i>Jatzibe, Brenda y Xaz</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Cumpleaños</h3>
						<p><i>Yann Lo</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Bienvenido y Redes Sociales</h3>
						<p><i>Noemi Figueroa</i></p>
					</span>
				</div>

				<div class="vein img-cir padding-b50">
					<img class="och centrado" src="http://lorempixel.com/200/200/people/" alt="">
					<span class="forma txt-center">
						<h3>Cumpleaños</h3>
						<p><i>Yann Lo</i></p>
					</span>
				</div>

				

					
			</div>					
									

								
							

			</div>
				
		</div>




		<div id="glosario" class="forma"> 
				<div class="contenedor centrado">


					
					<h1>Glosario</h1>

						
								<div class="forma">
									<div class="nov centrado-devices">
										<h3>Documentos</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto placeat et ipsam ullam, fugiat consectetur id. Inventore tenetur, ratione harum. Esse aut pariatur quisquam quas deserunt temporibus, aperiam itaque laudantium.</p>
										<div class="forma">
											<button class="boton trein"><a href="docs/manualdemanejo.pdf" target="_blank">Manual de manejo</a></button>
											<button class="boton vein-cin margin-l50"><a href="docs/reglamento.pdf" target="_blank">Reglamento</a></button>
											<button class="boton vein-cin margin-l50"><a href="docs/otros.pdf" target="_blank">Otros</a></button>
										</div>
										<div class="forma">
										<h3>Glosario</h3>
										<p><u>Barredora:</u> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error magni, dolorum modi ex impedit nesciunt quisquam repudiandae vero tempore quis deserunt mollitia est perspiciatis reprehenderit accusantium asperiores amet, omnis aspernatur!</p>
										<p><u>Barredora:</u> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error magni, dolorum modi ex impedit nesciunt quisquam repudiandae vero tempore quis deserunt mollitia est perspiciatis reprehenderit accusantium asperiores amet, omnis aspernatur!</p>
										<p><u>Barredora:</u> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error magni, dolorum modi ex impedit nesciunt quisquam repudiandae vero tempore quis deserunt mollitia est perspiciatis reprehenderit accusantium asperiores amet, omnis aspernatur!</p>
										<p><u>Barredora:</u> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error magni, dolorum modi ex impedit nesciunt quisquam repudiandae vero tempore quis deserunt mollitia est perspiciatis reprehenderit accusantium asperiores amet, omnis aspernatur!</p>
										<p><u>Barredora:</u> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error magni, dolorum modi ex impedit nesciunt quisquam repudiandae vero tempore quis deserunt mollitia est perspiciatis reprehenderit accusantium asperiores amet, omnis aspernatur!</p>
										<p><u>Barredora:</u> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error magni, dolorum modi ex impedit nesciunt quisquam repudiandae vero tempore quis deserunt mollitia est perspiciatis reprehenderit accusantium asperiores amet, omnis aspernatur!</p>
										</div>								
									</div>

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


