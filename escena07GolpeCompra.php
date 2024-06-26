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
AND escena6 ='Encontrar Muralla'";
/*Golpear vendedor = caballo*/
$buscargolpe="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena5 ='Golpear Vendedor'";
$resultado = $conexion -> query($buscareleccion);
$resultadogolpe = $conexion -> query($buscargolpe);
$count =mysqli_num_rows($resultado);
$countgolpe =mysqli_num_rows($resultadogolpe);
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
        <h2 class="white-text"><span class="colortemporal">Encontrar Muralla</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">continuas con tu viaje hasta finalmente llegar al castillo, pero te encuentras con una muralla defendiendolo, podrías intentar rodearla e intentar encontrar una entrada, o simplemente escalarla</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena08Muralla.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena7" value="Escalar Muralla" required />
                    <span class="white-text">Escalar Muralla</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena7" value="Rodear Muralla" />
                <span class="white-text">Rodear Muralla</span>
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
';
    if($countgolpe==1){
    echo'
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">Seguir camino</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Continuas por el camino con tu nuevo caballo cuando te encuentras con un comerciante, cuyo carruaje acaba de perder a su caballo, este te ofrece mostrarte el camino hacia la entrada de comerciantes del castillo si dejas que tu caballo lo ayude con su carruaje</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena08Infinito.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena7" value="Ayudar Comerciante" required />
                    <span class="white-text">Ayudar Comerciante</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena7" value="Seguir Caminox2" />
                <span class="white-text">Seguir Caminox2</span>
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
        <div class="container">
        <h2 class="white-text"><span class="colortemporal">Seguir camino</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Continuas por el camino pero notas que hay arboles que estas seguro ya haber visto antes, sin saber que hacer continuas avanzando</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena08Infinito.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s12 center-align">
            <p>
                <label>
                    <input type="radio" name="escena7" value="Seguir Caminox2" required />
                    <span class="white-text">Seguir Caminox2</span>
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