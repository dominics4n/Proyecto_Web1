<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$sesionusuario = $_POST['nombre_usuario'];

$buscartabla="SELECT * FROM Encuesta_Opcional 
WHERE nombre_usuario = '$_POST[nombre_usuario]'";
$resultado = $conexion -> query($buscartabla);
$count =mysqli_num_rows($resultado);
if($count==1){   
    $consulta="DELETE FROM Encuesta_Opcional 
    WHERE nombre_usuario = '$_POST[nombre_usuario]'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header('Location: soulkillertarget.php');
}else{
    echo'no existe esa tabla';
}
?>