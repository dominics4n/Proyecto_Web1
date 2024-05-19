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

$consulta_sql="SELECT * FROM IDpartida";

$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado); 
 
echo '<table table class="bordesindex formindex white-text">
    <tr>
        <th>Usuario</th>
        <th>Escena 1</th>
        <th>Escena 2</th>
        <th>Escena 3</th>
        <th>Escena 4</th>
        <th>Escena 5</th>
        <th>Escena 6</th>
        <th>Escena 7</th>
        <th>Escena 8</th>
        <th>Escena 9</th>
        <th>Escena 10</th>
        <th>Final</th>
        <th>Estado</th>
    </tr>';

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['escena1'] ."</td>";
     echo"<td>". $row['escena2'] ."</td>";
     echo"<td>". $row['escena3'] ."</td>";
     echo"<td>". $row['escena4'] ."</td>";
     echo"<td>". $row['escena5'] ."</td>";
     echo"<td>". $row['escena6'] ."</td>";
     echo"<td>". $row['escena7'] ."</td>";
     echo"<td>". $row['escena8'] ."</td>";
     echo"<td>". $row['escena9'] ."</td>";
     echo"<td>". $row['escena10'] ."</td>";
     echo"<td>". $row['Final'] ."</td>";
     echo"<td>". $row['Estado'] ."</td>";
     echo "</tr>";
    }
    echo "</table>";
}else{
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }
    echo '<h5><span class="colorindex"><a href="soulkillertarget.php">Eliminar Registro</a></span></h5>';
?>