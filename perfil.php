<?php 
session_start();

if($_SESSION["nombre"])
{
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
	  <nav>
		<p id="a"><a href="salir.php">Salir</a>
			&nbsp;&nbsp;
			Bienvenido (a)&nbsp;&nbsp;<?php echo "<b>". $_SESSION["nombre"]."</b>"; ?>
		</p>
	  </nav>
	</header><br><br>
	<section>
		
	</section>
</body>
</html>
<?php
}  
else
{
	header("Location: http://localhost/charolastra");
}
?>



