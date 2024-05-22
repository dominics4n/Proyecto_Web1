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

$consulta_sql="SELECT * FROM Encuesta_Opcional 
WHERE nombre_usuario = '$_POST[nombre_usuario]'";

$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado); 
 
echo '<table class="bordesindex formindex white-text">
    <tr>
        <th>Usuario</th>
        <th>Correo</th>
        <th>Videojuego Favorito</th>
        <th>Cancion Favorita</th>
        <th>Quote o algo nose</th>
    </tr>';

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['correo_usuario'] ."</td>";
     echo"<td>". $row['vg_usuario'] ."</td>";
     echo"<td>". $row['music_usuario'] ."</td>";
     echo"<td>". $row['quote_usuario'] ."</td>";
     echo "</tr>";
    }
    echo "</table>";
    echo '<h5><span class="colorindex"><a href="soulkillertarget.php">Eliminar Registro</a></span></h5>';
}else{
    echo "</table>";
    echo'
    <div class="container center-align">
    <h1 class="white-text colorindex">Datos no encontrados</h1>
    <img src="media/chromemouth.jpg">
    <div class="center-align">
        <a class="waves-effect waves-light btn-large botonindex" href="camino_personal.php">Reintentar</a>
        </div>
    </div>';
    }
    
?>