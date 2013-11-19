<?php 
require_once("conexion.php"); 
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
		<nav>
		   <form action="entrar.php" method="POST" id="s">
		   <label for="correo">Iniciar Sesion&nbsp;&nbsp;Correo</label>
		   <input type="email" id="correo"  name="correo" title"Real">
		   <label for="password">Contraseña</label>
		   <input type="password" id="password"  name="pass">
		   <input type="submit" value="Entrar">
           </form>
		</nav>
</header>
	<br>
	<div id="click"><legend>Registrate</legend></div>
<section id="oculto">
	<form action="agregar.php" method="POST">
	  
	  <label for="correo">Correo</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="email" id="correo" required name="correo" title"Real"><br>
	  <label for="nombre">Nombre</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="text" id="nombre" required name="nombre"><br>
	  <label for="password">Contraseña</label>
	  <input type="password" id="password" required name="pass"><br>
	  <input type="submit" value="Registrar">
    </form>
</section>
</body>
</html>



