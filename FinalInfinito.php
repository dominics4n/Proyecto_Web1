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
AND escena5 ='Golpear Vendedor'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Soledad Infinita'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='depre'
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
        <h2 class="white-text"><span class="colortemporal">Soledad Infinita</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Después de un tiempo te das cuenta de que realmente no necesitabas comer, tal vez no fue la mejor idea el comerte a tu única compañía antes de asegurarte siquiera de si tenías hambre, sin nada que hacer, continuas sentado a mitad de camino, meditando eternamente</span></p>
        <br><br>
    </div>
    <div class="center-align">
    <img src="media/bonfire.jpeg">
    </div>
    <div class="center-align">
    <a class="waves-effect waves-light btn-large botonindex" href="index.php">End</a>
    </div>
';
}else{
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Infinidad infinita'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='Inmortal'
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
        <h2 class="white-text"><span class="colortemporal">Infinidad infinita</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Con el tiempo empezaste a construir una casa a la orilla del camino, utilizando la materia prima infinita de tus alrededores, y lograste obtener una vida eterna sin preocupaciones ni impuestos. Tu casa se vuelve una leyenda entre los viajeros, quienes cuentan que si te pierdes en el camino equivocado durante el atardecer puedes llegar a una casa misteriosa a un lado del camino, la cual siempre desaparece en cuanto el sol se oculta</span></p>
        <br><br>
    </div>
    <div class="center-align">
    <img src="media/oceanview_motel.jpg"width="1500">
    </div>
    <div class="center-align">
    <a class="waves-effect waves-light btn-large botonindex" href="index.php">End</a>
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