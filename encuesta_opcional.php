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

include "conexion.php";
/*busca si ya hay una partida llamada igual*/
$buscarpartida="SELECT * FROM Encuesta_Opcional WHERE nombre_usuario ='$_POST[nombre_usuario]'";
$resultado = $conexion -> query($buscarpartida);
$count =mysqli_num_rows($resultado);

if($count==1){
    $sesionusuario = $_POST['nombre_usuario'];
    $sesioncorreo = $_POST['correo_usuario'];
    $sesionvg = $_POST['vg_usuario'];
    $sesionmusica = $_POST['music_usuario'];
    $sesionquote = $_POST['quote_usuario'];
    session_start();
    $_SESSION['usuario'] = $sesionusuario;
    $_SESSION['correo'] = $sesioncorreo;
    $_SESSION['vg'] = $sesionvg;
    $_SESSION['musica'] = $sesionmusica;
    $_SESSION['quote'] = $sesionquote;

    echo'
    <div class="container center-align">
        <h1 class="white-text colorindex">Usuario ya registrado</h1>
        <h1 class="white-text colorindex">Desea sobreescribir sus respuestas anteriores?</h1>
        <img src="media/simsprank.jpg">
        <div class="center-align">
        <a class="waves-effect waves-light btn-large botonindex" href="sobreescribir.php">Si</a>
        <a class="waves-effect waves-light btn-large botonindex" href="index.php">Cancelar</a></div>
        </div>
        ';

}else{
    mysqli_query($conexion,"INSERT INTO Encuesta_Opcional (
        nombre_usuario,correo_usuario,vg_usuario,music_usuario,quote_usuario)
        VALUES(
            '$_POST[nombre_usuario]','$_POST[correo_usuario]','$_POST[vg_usuario]','$_POST[music_usuario]','$_POST[quote_usuario]'
        )");
    echo'
    <div class="container center-align">
    <h1 class="white-text colorindex">Datos registrados con exito</h1>
    <img src="media/yogurting.jpg">
    </div>';
}
?>