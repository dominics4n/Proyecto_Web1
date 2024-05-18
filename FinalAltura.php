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
AND escena10 ='Lanzar Roca'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Accidente de Trabajo'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='Sindicalizado'
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
        <h2 class="white-text"><span class="colortemporal">Accidente de trabajo</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Volteas a tu derecha y observas una roca cómicamente grande esperando un pequeño empujón para caer hacia el rey, asi que se lo das, la roca cae con tal fuerza y velocidad que al momento de impactar esta explota, no sin antes licuar completamente el cuerpo del rey, este suceso fue visto como un accidente de trabajo en el reino, lo que impulsó diversos sindicatos y reformas para asegurarse de que los trabajadores tuvieran condiciones de trabajo seguras y dignas</span></p>
        <br><br>
    </div>
';
}else{
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Assassins Creed'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='Obliterado'
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
        <h2 class="white-text"><span class="colortemporal">Assasins Creed</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Recuerdas tu entrenamiento en la orden de los asesinos y realizas un salto de fe, conforme ganas velocidad recuerdas que en realidad tú no recibiste entrenamiento de la orden y que eso solo fue una orbea de teatro que viste, pero ya es demasiado tarde, alcanzas la velocidad terminal pero logras controlar la dirección lo suficiente como para alcanzar al rey, en el momento en el que hacen contacto, sus cuerpos se obliteran mutuamente, dejando un pequeño cráter y una masa roja indistinguible en el suelo, valio la pena? valio cada maldito segundo</span></p>
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