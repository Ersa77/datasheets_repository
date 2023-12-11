<?php 

	include("conection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultados</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">      <!-- referencia a mi hoja de estilos -->    
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">	<!-- referencia al normalize -->
</head>
<body>

	<header>
		<nav>
			<h1 class="title"><a href="index_admin.php" style="text-decoration: none; color: white">Administracion de Datasheets</a></h1>	<!-- titulo de la pagina -->
		</nav>
	</header>

	<main>
		<div class="welcome">
			<h1>Ingrese términos para buscar</h1>
		</div>


		<div class="buscar">

		<?php 

			$search = strtolower ($_REQUEST['search']);
			if(empty($search))
			{
				 header("location: index_admin.php");
			}

		 ?>

			<form action="quest_admin.php" method="get">
				<br>
				<input type="text" name="search" placeholder="Componente, modelo, etc..." value="<?php echo $search; ?>">
				<br>
				<br>
				<button>Buscar</button>
			</form>

		</div>

		<div class="result">

			<h1>Resultados para <?php echo $search; ?></h1>

			<table>
				<thead>
				<tr>
					<th>Componente</th>
					<th>Descripcion</th>
					<th>Materia</th>
					<th>Hoja</th>
					<th>Acciones</th>
				</tr>
				</thead>

				<?php 
					$sql="SELECT * FROM datasheets
						  WHERE 
						  (
						   Componente LIKE '%$search%' OR
						   Descripcion LIKE '%$search%' OR
						   Materia LIKE '%$search%'
						  ) ORDER BY ID ASC;";
					$result= mysqli_query($conexion, $sql);

					while($mostrar=mysqli_fetch_array($result))
					{
					?>

						<tr>
						<td><?php echo $mostrar['Componente'] ?></td>
						<td><?php echo $mostrar['Descripcion'] ?></td>
						<td><?php echo $mostrar['Materia'] ?></td>
						<td><a href="<?php echo $mostrar['Ruta'] ?>"><?php echo $mostrar['Componente'] ?></a></td>
						<td><a href="edit_datasheet.php?id=<?php echo $mostrar['ID']; ?>" id="mod">Modificar</a> | <a href="" id="del">Eliminar</a></td>
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