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
mysqli_query($conexion, "UPDATE IDpartida SET escena3='$_POST[escena3]'
WHERE nombre_usuario ='$_SESSION[clairo]'");

/*eleccion escena 2 ramas*/
$buscareleccion="SELECT * FROM IDpartida WHERE nombre_usuario ='$_SESSION[clairo]' 
AND escena3 ='Bayas'";

$resultado = $conexion -> query($buscareleccion);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo'
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">Bayas</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Eliges las bayas, y por su buen sabor deduces que no son venenosas, lo que no sabes es que en realidad destruyendo tu hígado lentamente, probablemente no viviras mas de los 30 años, pero no es una muerte inmediata así que sigues felizmente por tu camino, empiezas a percibir una ligera niebla pero no le diste importancia, hasta que de un momento a otro te ves completamente cegado por la ahora increíblemente densa niebla, ahora sin vista, dependes de tus demás sentidos para continuar, intentas seguir en el camino pero comienzas a escuchar agua fluir a lo lejos, probablemente es más fácil seguir el agua a intentar seguir el camino, pero no estas seguro de que seguirla te acercará a tu destino</span></p>
        <br><br>
    </div>
    ';
    
}else{
    echo'
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">Hongos</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Haz escuchado historias de hongos que te vuelven más grande o que incluso te dan una vida extra, y aunque no sabes qué significa eso emocionado comienzas a comer tantos hongos como puedas, tristemente el único efecto que tienen es causarte un daño hepático irreversible, y también te hacen alucinar una espesa niebla por alguna razón,con la vista ahora bloqueada por la niebla, dependes de tus demás sentidos para continuar, intentas seguir en el camino pero comienzas a escuchar agua fluir a lo lejos, probablemente es más fácil seguir el agua a intentar seguir el camino, pero no estas seguro de que seguirla te acercará a tu destino</span></p>
        <br><br>
    </div>
    ';
}
echo'
<div class="container">
<div class="row">
    <form action="escena05Niebla.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input type="radio" name="escena4" value="Pantano" required />
                    <span class="white-text">Pantano</span>
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
echo'
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
';
?>