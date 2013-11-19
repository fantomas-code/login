<?php
require 'conexion.php';  

$destino = "img";
$archivo = $_FILES["foto"]["tmp_name"];
$nombre = $_FILES["foto"]["name"];
move_uploaded_file($archivo, $destino."/".$nombre);
 $destino=$destino."/".$nombre;
if($_FILES["foto"]["name"]== true)
{
	$consulta ="INSERT INTO foto (foto) VALUES('$destino')";
    $resultado = $conexion->query($consulta);
    
   
    if($resultado)
    {
    	
        // 
	    echo "<script>
		         alert('Se subio la imagen');
		         window.location='perfil.php';
             </script>";
    }
    else
    {
    	echo "<script>
		         alert('No se subio la imagen');
		         window.location='perfil.php';
             </script>";
    }
	
}
else
{
	echo "<script>
	         alert('Selecciona una foto');
	         window.location='perfil.php';
          </script>";
}
// $texto=$_FILES[""][""];
// echo "<img src='$destino'>";

     
?>

