<?php 
	include("conection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administracion de Biblioteca</title>          			<!-- Titulo de la pestaña uwu -->
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">      <!-- referencia a mi hoja de estilos -->    
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">	<!-- referencia al normalize -->
</head>
	<script type="text/javascript">
		 function ConfirmDel()
		 {
			 var respuesta = confirm("¿Eliminar esta datasheet?");

			 if(respuesta == true){
				 return true;
			 }
			 else{
				 return false;
			 }
		 }
	</script>
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
			<form action="quest_admin.php" method="get">
				<br>
				<input type="text" name="search" placeholder="Componente, modelo, etc...">
				<br>
				<br>
				<button>Buscar</button>
			</form>

		</div>

		<h1>MODO ADMINISTRADOR</h1>

		<div class="action_admin">

			<h1>Todos los Componentes</h1>

			<button><a href="add_datasheet.php">Agregar una datasheetssheet</a></button>
			<br>
			<br>
			
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
					$sql="SELECT ID, Componente, Descripcion, Materia, Ruta FROM datasheets";
					$result= mysqli_query($conexion, $sql);

					while($mostrar=mysqli_fetch_array($result))
					{
					?>

						<tr>
						<td><?php echo $mostrar['Componente'] ?></td>
						<td><?php echo $mostrar['Descripcion'] ?></td>
						<td><?php echo $mostrar['Materia'] ?></td>
						<td><a href="<?php echo $mostrar['Ruta'] ?>"><?php echo $mostrar['Componente'] ?></a></td> 
						<td><a href="edit_datasheet.php?id=<?php echo $mostrar['ID']; ?>" id="mod">Modificar</a> | <a href="delete_datasheet.php?id=<?php echo $mostrar['ID']; ?>" id="del" onclick="return ConfirmDel()">Eliminar</a></td>
						</tr>


					<?php  
					}
					?>
			</table>
		<br>

		<button><a href="login.php">Cerrar sesion de administrador</a></button>
			
		</div>
		
	</main>
	<br>
	<footer>
		<p>Facultad de Informatica, Universidad Autonoma de Queretaro</p>
	</footer>
</body>
</html>