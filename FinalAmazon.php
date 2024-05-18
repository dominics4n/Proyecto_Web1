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

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
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
        <p class="white-text textoaltura"><span class="colortemporal">Atacas al Rey en cuanto entra a la sala pero este logra defenderse, después de una larga pelea logras posicionarte en un terreno elevado, y ahora con una clara ventaja cortas al rey de un solo espadazo por la mitad,cuando los guardias te encuentran con la mitad del cuerpo del rey parecen felices, después del impuesto a las espadas era cuestión de tiempo para que algo como esto pasara, y no solo te permiten irte, sino que te regalan una parte del tesoro del rey para que puedas comprar tu viñedo de vuelta</span></p>
        <br><br>
    </div>
';
}else{
    mysqli_query($conexion, "UPDATE IDpartida SET Final='Game of Thrones'
    WHERE nombre_usuario ='$_SESSION[clairo]'");
    mysqli_query($conexion, "UPDATE IDpartida SET Estado='Bipolar'
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
        <h2 class="white-text"><span class="colortemporal">Game of Thrones</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">El rey llega a su reunión contigo, una vez listo le sirves de tu botella de vino, y antes de que te des cuenta los dos están alcoholizados y platicando como si fueran viejos amigos, con esta nueva amistad el rey se ofrece a comprar tus tierras y dárselas para que continues con tu trabajo, pero antes de que pueda terminar comienza a ahogarse y cae muerto, tal parece que los impuestos no fue la única razón por la que cerraste, tu viñedo tambien tenia graves problemas de sanidad, con tu misión técnicamente cumplida, abandonas el castillo un poco insatisfecho</span></p>
        <br><br>
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