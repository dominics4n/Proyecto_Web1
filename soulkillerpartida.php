<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$consulta="DELETE FROM IDpartida WHERE nombre_usuario =$_POST['nombre_usuario']
AND color_usuario =$_POST['color_usuario']";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: camino_global.php');
?>