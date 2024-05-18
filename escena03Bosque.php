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
mysqli_query($conexion, "UPDATE IDpartida SET escena2='$_POST[escena2]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena2 ='Hambre'";

$resultado = $conexion -> query($buscareleccion);
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
        <h2 class="white-text"><span class="colortemporal">Hambre</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Decides seguir en la seguridad del camino, después de caminar por un rato empiezas morirte de hambre, revisas tu mochila pero no encuentras comida, tal vez fue mala idea gastar todo tu dinero en esa espada que ni siquiera sabes usar, aunque te da bastante estilo, sin ninguna otra opción buscas a tu alrededor por alguna clase de alimentos, encuentras un arbusto de bayas y un tipo de hongo que no reconoces, es posible que alguno de los dos sea venenoso, tal vez los dos, tal vez ninguno, pero tienes tanta hambre que estás dispuesto a tomar el riesgo con uno de ellos, cual será?</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena04Comida.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena3" value="Bayas" required />
                    <span class="white-text">Bayas</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena3" value="Setas" />
                <span class="white-text">Setas</span>
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
        <h2 class="white-text"><span class="colortemporal">noHambre</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Investigando el campamento encuentras algo de comida y los huesos de alguien, enciendes la fogata para calentar la comida cuando te das cuenta que hay un lobo acercándose</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena04Lobo.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s4 center-align">
            <p>
                <label>
                    <input type="radio" name="escena3" value="Intenta Correr" required />
                    <span class="white-text">Intenta Correr</span>
                </label>
            </p>
        </div>
        <div class="col s4 center-align">
            <p>
            <label>
                <input type="radio" name="escena3" value="Lanza Hueso" />
                <span class="white-text">Lanza Hueso</span>
            </label>
            </p>
        </div>
        <div class="col s4 center-align">
            <p>
            <label>
                <input type="radio" name="escena3" value="Ataca" />
                <span class="white-text">Ataca</span>
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