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
mysqli_query($conexion, "UPDATE IDpartida SET escena3='$_POST[escena3]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena3 ='Intenta Correr'";
$tripleeleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena3 ='Ataca'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    mysqli_query($conexion, "UPDATE IDpartida SET escena4='----------'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
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
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Lobo Solitario'
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
        <p class="white-text textoaltura"><span class="colortemporal">Intentas correr pero el lobo te alcanza rápidamente, cuando termina solo queda tu mochila al lado del campamento, la que servirá de carnada para el próximo viajero que pase</span></p>
        <br><br>
    </div>
    </div>
    </div>
';
}else{
    $resultado = $conexion -> query($tripleeleccion);
    $count =mysqli_num_rows($resultado);
    if($count==1){
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
                <h2 class="white-text"><span class="colortemporal">Ataca</span></h2>
                <p class="white-text textoaltura"><span class="colortemporal">Tomas tu espada y te preparas para atacar, el lobo te rasguña un poco pero logras vencerlo, continuas con lo que estabas haciendo y aprovechas la carne del lobo, es comer o ser comido, escuchas un río a lo lejos asi que te acercas a él para lavarte las manos cuando encuentras una barca</span></p>
                <br><br>
            </div>
        <div class="container">
        <div class="row">
            <form action="escena05RioLobo.php" method="post" class="col s10 offset-s1">
            <div class="col s8 offset-s2">
                <br>
                <div class="row bordestemporal formtemporal">
                <div class="col s12 center-align">
                    <p>
                        <label>
                            <input type="radio" name="escena4" value="Rio" required />
                            <span class="white-text">Rio</span>
                        </label>
                    </p>
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
        <h2 class="white-text"><span class="colortemporal">No ataca</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Intentas golpear al lobo a distancia con un hueso, pero este lo atrapa fácilmente con la boca y te lo regresa, parece pensar que están jugando, decides compartir de la comida que encontraste, lo que hace que te empieze a seguir, eventualmente encuentras un río y una barca, que puedes usar para viajar por el río, estas subiendo a la barca cuando volteas a ver al lobo, que parece confundido por tu partida</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena05RioLobo.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena4" value="Barco con Lobo" required />
                    <span class="white-text">Barco con Lobo</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena4" value="Rio" />
                <span class="white-text">Rio</span>
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
    
}
echo'
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
';
?>