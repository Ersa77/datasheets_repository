<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Virtual de Datasheets</title>          			<!-- Titulo de la pestaña uwu -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">      <!-- referencia a mi hoja de estilos -->    
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	<!-- referencia al normalize -->
</head>
<body>

<!-- Header General para todas las páginas de la biblioteca, es un enlace a la pagina principal -->

	<header>
		<nav>
			<h1 class="title"><a href="index.php" style="text-decoration: none; color: white">Biblioteca Virtual de Datasheets</a></h1>	<!-- titulo de la pagina -->
		</nav>
	</header>

	<main>

<!-- Banner de búsqueda -->

		<div class="welcome">
			<h1>Ingrese términos para buscar</h1>
		</div>

<!-- Barra de busqueda -->

		<div class="buscar">
			<form action="quest.php" method="get">
				<br>
				<input type="text" name="search" placeholder="Componente, modelo, etc...">
				<br>
				<br>
				<button>Buscar</button>
			</form>

		</div>

<!-- Clasificación por materias, cada boton lleva a su propia página para visualizar las datasheets relacionadas a esa materia -->

		<div class="contenido">
			<h1>Buscar por materia</h1>
			<h3 class="bloque"><a href="circuitos.php">Circuitos Electricos</a></h3> 
			<br>
			<h3 class="bloque"><a href="analog.php">Electronica Analogica</a></h3>
			<br>
			<h3 class="bloque"><a href="digital.php">Electronica Digital</a></h3>
			<br>
			<h3 class="bloque"><a href="sistbas.php">Sistemas Basicos, Arquitectura y Procesamiento</a></h3>
			<br>
			<h3 class="bloque"><a href="logdig.php">Logica Digital</a></h3>
			<br>
			<h3 class="bloque"><a href="sistdig.php">Sistemas Digitales</a></h3>
			<br>
			<h3 class="bloque"><a href="sistpropgen.php">Sistemas de Proposito General</a></h3>
			<br>
			<h3 class="bloque"><a href="eym.php">Electricidad y Magnetismo</a></h3>
			<br>
			<h3 class="bloque"><a href="comelect.php">Comunicaciones Electronicas</a></h3>
			<br>
			<h3 class="bloque"><a href="mod.php">Sistemas de Modulacion</a></h3>
			<br>
			<h3 class="bloque"><a href="radio.php">Circuitos de Radiofrecuencia</a></h3>
			<br>
			<h3 class="bloque"><a href="lista_componentes.php">Ver todos los componentes</a></h3>
			<br>
			<h3 class="bloque"><a href="admin/login.php">Administrar</a></h3>
		</div>

	</main>
	<br>
	<footer>
		<p>Facultad de Informatica, Universidad Autonoma de Queretaro</p>
	</footer>

</body>
</html>