<?php

include "conexion.php";
/*busca si ya hay una partida llamada igual*/
$buscarpartida="SELECT * FROM Encuesta_Opcional WHERE nombre_usuario ='$_POST[nombre_usuario]'";
$resultado = $conexion -> query($buscarpartida);
$count =mysqli_num_rows($resultado);

if($count==1){
    echo'<h1>usuario ya registrado</h1>
    <img src="media/simsprank.jpg">';

}else{
    mysqli_query($conexion,"INSERT INTO Encuesta_Opcional (
        nombre_usuario,correo_usuario,vg_usuario,music_usuario,quote_usuario)
        VALUES(
            '$_POST[nombre_usuario]','$_POST[correo_usuario]','$_POST[vg_usuario]','$_POST[music_usuario]','$_POST[quote_usuario]'
        )");
    echo'<h1>ok</h1>
    <img src="media/yogurting.jpg">';
}
?>