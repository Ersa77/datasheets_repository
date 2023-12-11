<?php 

	include('conection.php'); 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Editar datasheetssheet</title>
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">      <!-- referencia a mi hoja de estilos -->    
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">	<!-- referencia al normalize -->

 </head>
 <body>

 	<header>
		<nav>
			<h1 class="title"><a href="index_admin.php" style="text-decoration: none; color: white">Adminstracion de Datasheets</a></h1>	<!-- titulo de la pagina -->
		</nav>
	</header>

	<div class="edit">

	<?php 

		$id= $_GET["id"];
		$invocation= "SELECT * FROM datasheets WHERE ID= '$id'";
		$result= mysqli_query($conexion, $invocation);

		while($mostrar=mysqli_fetch_array($result))
		{
		?>
		
		<form action="validate_edit.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $mostrar['ID']; ?>">
			<h2>Componente</h2> 
			<input type="text" placeholder="Modelo del componente" name="componente" value="<?php echo $mostrar['Componente']; ?>" required>
			<h2>Descripcion</h2> 
			<input type="text" placeholder="Sensor de temperatura, Transistor..." name="descripcion" value="<?php echo $mostrar['Descripcion']; ?>" required>
			<h2>Materia</h2> 
				<select name="materia" required>
					<option value="<?php echo $mostrar['Materia']; ?>" selected="selected"><?php echo $mostrar['Materia']; ?></option>
					<?php  
						$sql2= "SELECT * FROM materias";
						$result2= mysqli_query($conexion,$sql2);

						while($mater= mysqli_fetch_array($result2))
						{
							if($mater['materia'] != $mostrar['Materia']){
						?>
							<option value="<?php echo $mater['materia'] ?>"><?php echo $mater['materia'] ?></option>
					<?php } }?>
				</select>
			<h2>Archivo</h2>
			<input type="hidden" name="datasheet">
			<h3><a href="<?php echo $mostrar['Ruta'] ?>"><?php echo $mostrar['Componente'] ?></a></h3>
			<embed src="<?php echo $mostrar['Ruta'] ?>" type="application/PDF">
			<br>
			<input type="hidden" name="ruta" value="<?php echo $mostrar['Ruta']; ?>">

			<br>
			<br>
		<?php  
		}
		?>
		<input type="submit" value="Actualizar" name="go">
		</form>
		<br>
		<button><a href="index_admin.php">Cancelar</a></button>

	</div>
 
 </body>
 </html>