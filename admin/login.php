<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar sesion de administrador</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">      <!-- referencia a mi hoja de estilos -->    
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">	<!-- referencia al normalize -->
</head>
<body>

	<header>
		<nav>
			<h1 class="title"><a href="../index.php" style="text-decoration: none; color: white">Biblioteca Virtual de Datasheets</a></h1>	<!-- titulo de la pagina -->
		</nav>
	</header>

	<div class="login">
		
		<form action="validation.php" method="post">
			<h2>Usuario Administrador</h2> 
			<input type="text" placeholder="Usuario Administrador" name="user">
			<h2>Contraseña</h2>
			<input type="password" placeholder="Contraseña Administrador" name="pass">
			<br>
			<br>
			<input type="submit" value="Iniciar Sesion" name="go">

		</form>

	</div>

</body>
</html>