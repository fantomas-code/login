<?php  
require 'conexion.php';
$consulta = "SELECT * FROM foto";
$resultado = $conexion->query($consulta);
while($filas=$resultado->fetch_array())
{
	// echo "<b>".$filas["id"]."<br><b>";
	// echo "<b>".$filas["foto"]."<br><b>";
   echo "<img src='".$filas['foto']."' width=100>";

}
?>
		


