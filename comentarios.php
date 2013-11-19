<?php  
require 'conexion.php';

$consulta = "SELECT * FROM comentar";
$resultado = $conexion->query($consulta);
while($filas=$resultado->fetch_assoc())
{
	// echo "<b>".$filas["id"]."<br><b>";
	 echo "<b>".$filas["nombre"]."<br><b><hr>";
	 echo "<b>".$filas["mensaje"]."<br><b><hr>";
	 // echo "<b>".$filas["fecha"]."<br><b>";
	 // echo "<b>".$filas["hora"]."<br><b>";
}
?>