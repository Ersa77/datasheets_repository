<?php 

	include('conection.php'); 
	// holitas uwu

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Agregar datasheetssheet</title>
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">      <!-- referencia a mi hoja de estilos -->    
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">	<!-- referencia al normalize -->

 </head>
 <body>

 	<header>
		<nav>
			<h1 class="title"><a href="index_admin.php" style="text-decoration: none; color: white">Adminstracion de Datasheets</a></h1>	<!-- titulo de la pagina -->
		</nav>
	</header>

	<div class="add">
		
		<form action="insert.php" method="post" enctype="multipart/form-data">
			<h2>Componente</h2> 
			<input type="text" placeholder="Modelo del componente" name="componente" required>
			<h2>Descripcion</h2> 
			<input type="text" placeholder="Sensor de temperatura, Transistor..." name="descripcion" required>
			<h2>Materia</h2> 
				<select name="materia" required>
					<option value="">-Seleccione una opcion-</option>
					<?php  

						$sql2= "SELECT * FROM materias";
						$result2= mysqli_query($conexion,$sql2);

						while($mater= mysqli_fetch_array($result2))
						{
					?>
					<option value="<?php echo $mater['materia'] ?>"><?php echo $mater['materia'] ?></option>
					<?php } ?>
				</select>
			<h2>Archivo</h2>
			<input type="file" name="datasheet" required>
			<br>
			<br>
			<input type="submit" value="Agregar" name="go">

		</form>

	</div>
 
 </body>
 </html>