<?php  

$user= $_POST['user'];
$pass= $_POST['pass'];

session_start();

$_SESSION['user']= $user;

include('conection.php');

$consulta="SELECT * FROM users where user='$user' and pass='$pass'";
$resultado= mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);

if($filas){
	header("location:index_admin.php");
}
else{
	?>
	<?php 
	include("login.php");
	?>
	<h2 class="error">*Usuario o contraseña incorrectos*</h2>
	<?php  

}

mysqli_free_result($resultado);
mysqli_close($conexion);
session_destroy($user);