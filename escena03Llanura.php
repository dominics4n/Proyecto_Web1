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
<?php
include "conexion.php";
session_start();
/*actualiza escena 1 en tabla*/
mysqli_query($conexion, "UPDATE IDpartida SET escena2='$_POST[escena2]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena2 ='Sol'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo'<div class="container">
    <h2 class="white-text"><span class="colortemporal">Sol</span></h2>
    <p class="white-text textoaltura"><span class="colortemporal">Sigues caminando por el lado del sol para forjar carácter, llegas a un punto donde el camino se divide, uno sigue derecho hacia un puente, mientras que el otro claramente es un desvio de tu objetivo, pero en este hay mas sombra, tal vez sea mejor replantear tu posicion a cerca de la sombra</span></p>
    <br><br>
</div>';
}else{
    echo'
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">Sombrita</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Como persona normal decides caminar por el camino de la sombrita para protegerse del sol, llegas a un punto donde el camino se divide, uno sigue derecho hacia un puente, mientras que el otro claramente es un desvío de tu objetivo, pero en este hay mas sombra, tal vez sea mejor replantear tu posición a cerca de la sombra</span></p>
        <br><br>
    </div>
    ';
}
echo'
<div class="container">
<div class="row">
    <form action="escena04Divergencia.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena3" value="Camino A" required />
                    <span class="white-text">Camino A</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena3" value="Sombrita+" />
                <span class="white-text">Sombrita+</span>
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
echo'
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
';
?>