<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="proyecto_estilo.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="indexwp">
    <header>
        <nav class="nav-wrapper colorindex">
            <div class="container">
                <a href="index.php" class="brand-logo">Proyecto</a>
                <ul class="right">
                    <li> <a class="navclase" href="camino_personal.php"> Tu camino</a></li>
                    <li> <a class="navclase" href="camino_global.php"> Camino Global</a></li>
                    <li> <a class="navclase" href="soulkillertarget.php"> Borrar Partida</a></li>
                </ul>
            </div>
        </nav>
    </header>
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
    echo'
    <div class="container center-align">
    <h1 class="white-text colorindex">Partida eliminada con exito</h1>
    <div class="center-align">
        <a class="waves-effect waves-light btn-large botonindex" href="index.php">Continuar</a>
        </div>
    </div>
    <img src="media/mikunet.jpg">';
}else{
    echo'
    <div class="container center-align">
    <h1 class="white-text colorindex">Partida no encontrada</h1>
    <img src="media/callme.jpg">
    <div class="center-align">
        <a class="waves-effect waves-light btn-large botonindex" href="soulkillertarget.php">Reintentar</a>
        </div>
    </div>';
}
?>