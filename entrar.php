<?php 
session_start();

require 'conexion.php';

$correo = $_POST["correo"];
$pass = $_POST["pass"];
$pass = md5( $_POST["pass"]);

if(empty($correo) or empty($pass))
{
	echo "<script>
	         alert('Los campos estan vacios');
	         window.location='http://localhost/charolastra';
          </script>";
}
$consulta = "SELECT * FROM angy WHERE correo='$correo' and pass='$pass'";
$resultado = $conexion->query($consulta);
$fila = $resultado->num_rows;
if($fila == 0)
{
	echo "<script>
	         alert('El correo o contraseña no existen');
	         window.location='http://localhost/charolastra';
          </script>";
}
else
{
	// echo "Si hay datos";
	if($result=$resultado->fetch_array())
	{
		$_SESSION["id"] = $result["id"];
		$_SESSION["nombre"] = $result["nombre"];
		$_SESSION["correo"] = $result["correo"];
		// $_SESSION["pass"] = $result["pass"];
		header("Location: perfil.php");
	}
}
// echo "$consulta";

			 
		// $_SESSION["nombre"] = $_POST["nombre"];
		// $_SESSION["correo"] = $_POST["correo"];
		// header("Location: perfil.php");
		


// $filas = $resultado->num_rows;
// if ($filas==1) 
// {
// 	// 
// 	while ($filas=$resultado->fetch_array())
// 	{
// 		echo $filas["nombre"]."<br>";
// 		echo $filas["correo"]."<br>";
// 		echo $filas["pass"]."<br>";
// 		echo $filas["id"]."<br>";# code...
// 	}
// }

?>