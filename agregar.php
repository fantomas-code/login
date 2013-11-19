<?php
require 'conexion.php'; 

$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$pass = $_POST["pass"];
$pass = md5($pass);

$consulta = "SELECT * FROM angy WHERE correo='$correo'";
$ejecutarconsulta = $conexion->query($consulta);
$resultado = $ejecutarconsulta->num_rows;
if($resultado == 0)
{
	$consulta = "INSERT INTO angy (correo,nombre,pass) VALUES ('$correo','$nombre','$pass')";
	$ejecutarconsulta = $conexion->query(utf8_encode($consulta));
	if($ejecutarconsulta)
	{
		echo "<script>
	         alert('Registro exitoso');
	         window.location='http://localhost/charolastra';
          </script>";
	}
	else
	{
		echo "<script>
	         alert('Registro frustrado');
	         window.location='http://localhost/charolastra';
          </script>";
	}

}
else
{
	echo "<script>
	         alert('El correo ya existe');
	         window.location='http://localhost/charolastra';
          </script>";
}
$conexion->close();
?>