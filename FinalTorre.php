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
<?php
include "conexion.php";
session_start();
/*actualiza escena 1 en tabla*/
mysqli_query($conexion, "UPDATE IDpartida SET escena10='$_POST[escena10]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena10 ='Sabotear Plan'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Sabotaje explosivo'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='Michael Bay'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    echo'
<body>
<div class="temporalwp">
    <header>
        <nav class="nav-wrapper colortemporal">
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
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">Sabotaje explosivo</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Tomas tu oportunidad de sabotear el plan del rey, siguiendo el manual, modificas el pentagrama para improvisar un hechizo explosivo utilizando la última botella de vino que produjiste, un poco de tu sangre y 70 kilogramos de C4, una vez hechos las modificaciones, escapas rápidamente del castillo y encuentras un buen lugar para disfrutar la vista</span></p>
        <br><br>
    </div>
';
}else{
    mysqli_query($conexion, "UPDATE IDpartida SET Final='El lado oscuro'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='Atrapado'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    echo'
<body>
<div class="temporalwp">
    <header>
        <nav class="nav-wrapper colortemporal">
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
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">El lado oscuro</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Decides utilizar el plan del rey, e inmediatamente después de realizar el hechizo, te ves rodeado por guardias, pero no están aquí para detenerte, sino para pagar impuestos, incluso el rey se ve obligado a pagarte impuestos por gobernarte, al principio no parece un problema pero rápidamente te das cuenta que las personas no dejan de llegar para pagar impuestos, y rápidamente te ves atrapado entre personas y riquezas, estas son tantas que eventualmente sellan perfectamente cualquier entrada y salida, dejándote eternamente atrapado entre dinero de impuestos que nunca podras utilizar, poético</span></p>
        <br><br>
    </div>
';
}
echo'
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
';
?>