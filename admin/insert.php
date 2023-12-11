<?php 

	include("conection.php");

	$componente= $_POST['componente'];
	$descripcion= $_POST['descripcion'];
	$materia= $_POST['materia'];

	$tipo_archivo= $_FILES['datasheet']['type'];
	$tamaño= $_FILES['datasheet']['size'];

	if ($_FILES['datasheet']) {
		$nombre_base= basename($_FILES['datasheet']['name']);
		$final_name= date("m-d-y")."-". date("H-i-s"). "-". $nombre_base;
		$ruta= "files/". $final_name;
		$subir= move_uploaded_file($_FILES['datasheet']['tmp_name'], $ruta);
		if ($subir) {
			$insertsql= "INSERT INTO datasheets (Componente, Descripcion, Materia, Ruta) values ('$componente', '$descripcion',
			'$materia', '$ruta')";
			$result= mysqli_query($conexion, $insertsql);
			if ($result) {
				echo "<script>alert('Datasheet agregada correctamente'); window.location='add_datasheet.php'</script>";
			}
			else{
				printf("Errormessage: %s\n", mysqli_error($conexion));
			}
		}
		else{
			echo"<script>alert('Error al subir el archivo, no se pudo guardar'); window.location='add_datasheet.php'</script>";
		}
	}
	else{
		echo "<script>alert('Error al agregar la datasheet'); window.location='add_datasheet.php'</script>";
	}

 ?>