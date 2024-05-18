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
mysqli_query($conexion, "UPDATE IDpartida SET escena8='$_POST[escena8]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena5 ='Golpear Vendedor'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo'
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">Caballo infinito</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Después de estar atrapado en el bucle infinito por un tiempo, y no encontrar ninguna salida o fuente de alimento, tomas la difícil decisión de sacrificar a tu nuevo caballo para poder sobrevivir con su carne, acaso esto será el comerciante castigandote por no ayudarlo?</span></p>
        <br><br>
    </div>
';
}else{
    echo'
    <div class="container">
    <h2 class="white-text"><span class="colortemporal">Soledad infinito</span></h2>
    <p class="white-text textoaltura"><span class="colortemporal"> Una vez consciente de lo que está pasando, te das cuenta de que la hora del dia es una tarde perpetua, y no sientes la necesidad de comer o tomar agua</span></p>
    <br><br>
</div>
';
}
echo'
<div class="container">
<div class="row">
    <form action="escena10Infinito.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s12 center-align">
            <p>
                <label>
                    <input type="radio" name="escena9" value="Seguir Caminox4" required />
                    <span class="white-text">Acampar</span>
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