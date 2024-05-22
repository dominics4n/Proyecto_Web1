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
session_start();
include "conexion.php";
/*busca si ya hay una partida llamada igual*/
mysqli_query($conexion, "UPDATE Encuesta_Opcional SET correo_usuario='$_SESSION[correo]'
WHERE nombre_usuario ='$_SESSION[usuario]'");
mysqli_query($conexion, "UPDATE Encuesta_Opcional SET vg_usuario='$_SESSION[vg]'
WHERE nombre_usuario ='$_SESSION[usuario]'");
mysqli_query($conexion, "UPDATE Encuesta_Opcional SET music_usuario='$_SESSION[musica]'
WHERE nombre_usuario ='$_SESSION[usuario]'");
mysqli_query($conexion, "UPDATE Encuesta_Opcional SET quote_usuario='$_SESSION[quote]'
WHERE nombre_usuario ='$_SESSION[usuario]'");
    echo'
    <div class="container center-align">
    <h1 class="white-text colorindex">Datos actualizados con exito</h1>
    <img src="media/mikuhouse.jpg">
    <div class="center-align">
        <a class="waves-effect waves-light btn-large botonindex" href="index.php">Continuar</a>
        </div>
    </div>';
?>