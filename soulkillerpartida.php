<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$sesionusuario = $_POST['nombre_usuario'];

$buscartabla="SELECT * FROM IDpartida
WHERE nombre_usuario = '$_POST[nombre_usuario]'";
$resultado = $conexion -> query($buscartabla);
$count =mysqli_num_rows($resultado);
if($count==1){   
    $consulta="DELETE FROM IDpartida 
    WHERE nombre_usuario = '$_POST[nombre_usuario]' 
    AND color_usuario ='$_POST[color_usuario]'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header('Location: camino_global.php');
}else{
    echo'no existe esa tabla';
}
?>