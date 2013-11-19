<?php 
require 'conexion.php';

$nombre = $_POST["nombre"];
$mensaje = $_POST["mensaje"];

$consulta = "insert into comentar(nombre,mensaje) values('$nombre','$mensaje')";
$resultado = $conexion->query($consulta);
if($resultado) 
{
	// echo "<script>
 // 	         alert('Gracias por comentar');
 // 	         window.location='perfil.php';
 //          </script>";
	   header('Location: perfil.php');
	
}
else
{
	
	 echo "<script>
 	         alert('No hay nada');
 	         window.location='perfil.php';
          </script>";
	
}
$conexion->close();
?>