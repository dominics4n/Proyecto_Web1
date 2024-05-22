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
AND escena10 ='1vs1'";
$buscardisfraz="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena8 ='Usar Disfraz'";
$resultado = $conexion -> query($buscareleccion);
$resultadov2 = $conexion -> query($buscardisfraz);
$count =mysqli_num_rows($resultado);
$countv2 =mysqli_num_rows($resultadov2);
if($count==1){
    mysqli_query($conexion, "UPDATE IDpartida SET Final='1vs1'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='MLG'
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
        <h2 class="white-text"><span class="colortemporal">1vs1 manco de mi</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">No viniste hasta aquí para matarlo sigilosamente, así que de un grito le avisas de tu inminente ataque, después de una larga pelea logras posicionarte en un terreno elevado, y ahora con una clara ventaja cortas al rey de un solo espadazo por la mitad,cuando los guardias te encuentran con la mitad del cuerpo del rey parecen felices, después del impuesto a las espadas era cuestión de tiempo para que algo como esto pasara, y no solo te permiten irte, sino que te regalan una parte del tesoro del rey para que puedas comprar tu viñedo de vuelta</span></p>
        <br><br>
    </div>
    <div class="center-align">
    <img src="media/360noscope.gif">
    </div>
    <div class="center-align">
    <a class="waves-effect waves-light btn-large botonindex" href="index.php">End</a>
    </div>
';
}else{
    if($countv2==1){
        mysqli_query($conexion, "UPDATE IDpartida SET Final='Doble kill'
        WHERE nombre_usuario ='$_SESSION[clairo]'");
        mysqli_query($conexion, "UPDATE IDpartida SET Estado='Terminator T-800'
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
                <h2 class="white-text"><span class="colortemporal">Doble Kill</span></h2>
                <p class="white-text textoaltura"><span class="colortemporal">Corres a toda velocidad para empujar al rey, pero tu disfraz de guardia se atora entre tus piernas, lo que te hace salir volando, y aunque logras empujar al rey, él no es el único que cae a la lava, más tarde los guardias se dan cuenta de la desaparición del rey, y al no encontrar un cadáver llegan a la conclusión de que por alguna razón escapó, con este nuevo vacío de poder comienzan una serie de disputas internas que terminan en una gran guerra por todo el territorio para intentar mantenerse en el trono, lo que muy pronto dejaría inhabitable la zona</span></p>
                <br><br>
            </div>
            <div class="center-align">
                <img src="media/lava.gif">
                </div>
                <div class="center-align">
                <a class="waves-effect waves-light btn-large botonindex" href="index.php">End</a>
            </div>
        ';
    }else{
        mysqli_query($conexion, "UPDATE IDpartida SET Final='Nuevo comienzo'
        WHERE nombre_usuario ='$_SESSION[clairo]'");
        mysqli_query($conexion, "UPDATE IDpartida SET Estado='Vivo'
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
                <h2 class="white-text"><span class="colortemporal">Nuevo comienzo</span></h2>
                <p class="white-text textoaltura"><span class="colortemporal">Comienzas a correr con todas tus fuerzas hacia el Rey, y de un solo empujón logras lanzarlo a la lava, donde es cocinado lentamente mientras roca fundida se queda pegada permanentemente a su piel, hasta que finalmente deja de gritar y se queda inmovil, realmente merecía un final tan violento? Probablemente si, antes de irte revisas las riquezas del Rey y encuentras las escrituras de un nuevo viñedo en el que puedes comenzar de nuevo </span></p>
                <br><br>
            </div>
            <div class="center-align">
                <img src="media/lava.gif">
                </div>
                <div class="center-align">
                <a class="waves-effect waves-light btn-large botonindex" href="index.php">End</a>
            </div>
        ';
    }
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Game of Thrones'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='Bipolar'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
}
echo'
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
';
?>