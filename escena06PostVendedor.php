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
mysqli_query($conexion, "UPDATE IDpartida SET escena5='$_POST[escena5]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena5 ='Cocodrilo Legendario'";

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
        <h2 class="white-text"><span class="colortemporal">Comprar</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Después de un acoso constante, finalmente cedes y utilizas lo último de tu dinero para comprar un abrelatas que se rompe al primer uso, derrotado, cruzas el puente y sigues con tu camino, pero hay algo que no te gusta a cerca de él, y ya sabes que fue lo que paso la ultima vez que ignoraste a tu sentido común</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena07GolpeCompra.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena6" value="Encontrar Muralla" required />
                    <span class="white-text">Encontrar Muralla</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena6" value="Seguir Camino" />
                <span class="white-text">Seguir Camino</span>
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
        <h2 class="white-text"><span class="colortemporal">Golpear Vendedor</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Intentas explicarle al vendedor que no tienes dinero para comprarle nada, pero este sigue insistiendo, después de 30 minutos, al darse cuenta de que no le vas a comprar nada, este se enoja por haberlo hecho perder el tiempo y comienza a atacarte físicamente, esto lleva a una pelea en la que accidentalmente lo lanzas del puente, y en la caída se rompe el cuello, aunque intentas lamentarte realmente la sociedad no perdió nada de valor, e incluso conseguiste quedarte con su caballo, sigues con tu camino, pero hay algo que no te gusta a cerca de él, y ya sabes que fue lo que paso la ultima vez que ignoraste a tu sentido común</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena07GolpeCompra.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena6" value="Encontrar Muralla" required />
                    <span class="white-text">Encontrar Muralla</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input type="radio" name="escena6" value="Seguir Camino" />
                <span class="white-text">Seguir Camino</span>
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