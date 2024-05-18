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
mysqli_query($conexion, "UPDATE IDpartida SET escena6='$_POST[escena6]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena6 ='Puente Falso'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    mysqli_query($conexion, "UPDATE IDpartida SET escena7='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena8='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena9='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET escena10='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Comida de cocodrilos'
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
        <h2 class="white-text"><span class="colortemporal">Mortis</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Si tiene oro seguramente es mejor, te dices a ti mismo conforme atraviesas ese camino, pero la madera no puede resistir tu peso y el del oro a la vez, por lo que el puente colapsa, caes al agua y en cuestión de segundos te ves completamente rodeado por cocodrilos y eres rápidamente devorado, pero al menos puedes morir feliz sabiendo que tu carne algo envenenada por la comida anterior también le ha causado daño hepático a los cocodrilos, por lo que tampoco vivirán más de 30 años</span></p>
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
        <h2 class="white-text"><span class="colortemporal">Puente normal</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Decides tomar el puente normal por que un puente de oro a la mitad de un pantano te parece bastante sospechoso, a mitad del camino te encuentras con la choza de una bruja, que aunque no parece muy feliz de recibir visitantes, te felicita por tu humildad al no elegir el puente de oro e incluso cura tu daño hepático como premio, que agradable sujeto. Una vez cruzado el puente sigues el camino hasta encontrarte enfrente de un rio, en lo que parece ser la base del volcán donde se encuentra el castillo del rey</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena08PuenteReal.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena7" value="Seguir Rio" required />
                    <span class="white-text">Seguir Rio</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena7" value="Seguir Volcan" />
                <span class="white-text">Seguir Volcan</span>
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