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
mysqli_query($conexion, "UPDATE IDpartida SET escena4='$_POST[escena4]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena4 ='Barco con Lobo'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    mysqli_query($conexion, "UPDATE IDpartida SET escena5='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena6='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena7='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena8='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena9='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena10='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Life of Pi'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='huesitos'
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
        <h2 class="white-text"><span class="colortemporal">MORTIS</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Dejas subir al lobo contigo para que te acompañe en tu viaje, pero en cuanto la barca comienza a avanzar te das cuenta de que solo conoces al lobo desde hace 10 minutos y realmente no puedes confiar en él, pero no tienes mucho tiempo para preocuparte cuando el lobo te arranca la cara de una mordida</span></p>
        <br><br>
    </div>
';
}else{
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
        <h2 class="white-text"><span class="colortemporal">Rio</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Te despides del lobo y continuas con tu viaje, después de navegar por un rato las aguas empiezan a ponerse un poco violentas, y es aquí cuando recuerdas que realmente no sabes nadar, y si el barco se voltea este probablemente sería tu final, aunque por otro lado, viajar en bote es bastante más rápido y efectivo</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena06Rio.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena5" value="Navegar Barco" required />
                    <span class="white-text">Navegar Barco</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena5" value="Dejar Barco"/>
                <span class="white-text">Dejar Barco</span>
            </label>
            </p>
        </div>
        </div>
    </div>
    <div class="row center-align">
    <div class="col s8 offset-s2">
        <button class="btn waves-effect waves-light botontemporal" type="submit" name="action">Continuar
            <i class="material-icons right">play_arrow</i>
        </button>
    </div>
    </div>
    </form>
    </div>
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