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

$sesionusuario = $_POST['nombre_usuario'];
session_start();
$_SESSION['clairo'] = $sesionusuario;

$buscarpartida="SELECT * FROM  IDpartida WHERE nombre_usuario ='$_POST[nombre_usuario]'";
$resultado = $conexion -> query($buscarpartida);
$count =mysqli_num_rows($resultado);
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
if($count==1){
    echo'<h4 class="colortemporal white-text">      Advertencia, el usuario ya esta registrado, si continua se sobreescribira su partida anterior</h4>
    <br><br>';
}else{
    mysqli_query($conexion,"INSERT INTO IDpartida (
        nombre_usuario)
        VALUES(
            '$_POST[nombre_usuario]'
        )");
}
echo'
    <div class="container">
        <h2 class="white-text"><span class="colortemporal">Escena 1</span></h2>
        <p class="white-text textoaltura"><span class="colortemporal">Después de caminar un poco, te encuentras con dos caminos diferentes, uno atraviesa el bosque, mientras que el otro te lleva hacia una llanura, aunque el camino de la llanura es el más rápido y directo, también implica la posibilidad de encontrarte con tus enemigos mortales, vendedores ambulantes, realmente estás dispuesto a tomar ese riesgo?</span></p>
        <br><br>
    </div>
<div class="container">
<div class="row">
    <form action="escena02.php" method="post" class="col s10 offset-s1">
    <div class="col s8 offset-s2">
        <br>
        <div class="row bordestemporal formtemporal">
        <div class="col s6 center-align">
            <p>
                <label>
                    <input value="Bosque" name="escena1" type="radio"  required />
                    <span class="white-text">Bosque</span>
                </label>
            </p>
        </div>
        <div class="col s6 center-align">
            <p>
            <label>
                <input value="Llanura" name="escena1" type="radio"  />
                <span class="white-text">Llanura</span>
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
</div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
';
?>