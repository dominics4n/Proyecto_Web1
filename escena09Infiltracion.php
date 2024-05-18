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
mysqli_query($conexion, "UPDATE IDpartida SET escena8='$_POST[escena8]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena8 ='Usar Sigilo'";
$buscaramazon="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]'
AND escena8 ='Finjir Entrega'";
$resultadoamazon = $conexion -> query($buscaramazon);
$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
$countamazon =mysqli_num_rows($resultadoamazon);
if($countamazon==1){
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
        <h2 class="white-text"><span class="colortemporal">Finjir Entrega</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Tomas la ultima botella de vino que produciste, y te preparas para fingir la entrega, te adentras en el castillo y al primer guardia que ves le exiges ver al rey, ya que tienes una entrega urgente para el, este no parece muy convencido así que tienes que motivarlo un poco</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena10Amazon.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena9" value="Amenazar Guardia" required />
                    <span class="white-text">Amenazar Guardia</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena9" value="Sobornar Guardia" />
                <span class="white-text">Sobornar Guardia</span>
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
}else{
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
        <h2 class="white-text"><span class="colortemporal">Usar Sigilo</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Comienzas a explorar el castillo en busca del rey, después de encontrar la sala del trono vacía, solo te queda explorar la torre más alta del castillo y la entrada a lo que parece ser el corazón del volcán, ¿donde se estará escondiendo el rey?</span></p>
        <br><br>
    </div>
        ';
    }
    else{
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
        <h2 class="white-text"><span class="colortemporal">Usar Disfraz</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Comienzas a explorar el castillo en busca del rey, después de encontrar la sala del trono vacía, solo te queda explorar la torre más alta del castillo y la entrada a lo que parece ser el corazón del volcán, ¿donde se estará escondiendo el rey?</span></p>
        <br><br>
    </div>
        ';
    }
    echo'

<div class="container">
<div class="row">
    <form action="escena10Arena.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena9" value="Torre" required />
                    <span class="white-text">Torre</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena6" name="escena9" value="Corazon Volcan" />
                <span class="white-text">Corazon Volcan</span>
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