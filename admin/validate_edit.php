<?php 

	include("conection.php");

	$id= $_POST['id'];
	$componente= $_POST['componente'];
	$descripcion= $_POST['descripcion'];
	$materia= $_POST['materia'];
	$ruta= $_POST['ruta'];

	$actualizar= "UPDATE datasheets SET Componente='$componente', Descripcion='$descripcion', Materia='$materia', Ruta='$ruta' WHERE ID='$id'";

	$resultado=mysqli_query($conexion, $actualizar);

	if ($resultado) {
		echo "<script>alert('Datasheet actualizada correctamente'); window.location='index_admin.php'</script>";
	}
	else{
		echo "<script>alert('Error al actualizar la datasheet'); window.location='edit_datasheet.php'</script>";
	}



 ?>