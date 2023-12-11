<?php

include("conection.php");

$id=$_GET['id'];

$sql="SELECT Ruta FROM datasheets WHERE ID='$id'";
$result= mysqli_query($conexion, $sql);
while($mostrar=mysqli_fetch_array($result)){
    
    $archivo= $mostrar['Ruta'];

    echo $archivo;
}
if(file_exists($archivo)){

    if(unlink($archivo))
    {
        $eliminar= "DELETE FROM datasheets WHERE ID='$id'";
        $resultado= mysqli_query($conexion, $eliminar);
        
        if ($resultado) {
            echo "<script>alert('Datasheet eliminada correctamente'); window.location='index_admin.php'</script>";
        }
        else{
            echo "<script>alert('Datasheet no eliminada'); window.location='index_admin.php'</script>";
        }
    }
    else{
        echo "No se pudo eliminar el archivo";

    }

}
else{

    echo "No se encontro el archivo";

}


?>