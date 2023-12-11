<?php 
	include("conection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Electronica Digital</title>          			<!-- Titulo de la pestaña uwu -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">      <!-- referencia a mi hoja de estilos -->    
	<link rel="stylesheet" type="text/css" href="css/normalize.css">	<!-- referencia al normalize -->
</head>
<body>

	<header>
		<nav>
			<h1 class="title"><a href="index.php" style="text-decoration: none; color: white">Biblioteca Virtual de Datasheets</a></h1>	<!-- titulo de la pagina -->
		</nav>
	</header>

	<main>

		<div class="welcome">
			<h1>Ingrese términos para buscar</h1>
		</div>


		<div class="buscar">

			<form action="quest.php" method="get">
				<br>
				<input type="text" name="search" placeholder="Componente, modelo, etc...">
				<br>
				<br>
				<button>Buscar</button>
			</form>

		</div>

		<div class="contenido">
			<h3 class="bloque"><a href="circuitos.php">Electronica Digital</a></h3>
			<br>

			<button><a href="index.php">Volver</a></button>

		</div>

		<div class="result">
			
			<table>
				<thead>
				<tr>
					<th>Componente</th>
					<th>Descripcion</th>
					<th>Materia</th>
					<th>Hoja</th>
				</tr>
				</thead>

				<?php 
					$sql="SELECT * FROM datasheets
						  WHERE 
						  (
						   Materia LIKE '%Electronica Digital%'
						  ) ORDER BY ID ASC;";
					$result= mysqli_query($conexion, $sql);

					while($mostrar=mysqli_fetch_array($result))
					{
					?>

						<tr>
						<td><?php echo $mostrar['Componente'] ?></td>
						<td><?php echo $mostrar['Descripcion'] ?></td>
						<td><?php echo $mostrar['Materia'] ?></td>
						<td><a href="<?php echo "admin/".$mostrar['Ruta'] ?>"><?php echo $mostrar['Componente'] ?></a></td> 
						</tr>

					<?php  
					}
					?>
			</table>
			
		</div>

	</main>
	<br>
	<footer>
		<p>Facultad de Informatica, Universidad Autonoma de Queretaro</p>
	</footer>

</body>
</html>