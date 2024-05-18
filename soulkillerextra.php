<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$consulta="DELETE FROM Encuesta_Opcional WHERE nombre_usuario =$_POST['nombre_usuario']";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: soulkillertarget.php');
?>