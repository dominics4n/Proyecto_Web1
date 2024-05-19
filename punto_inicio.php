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
<div class="iniciowp">
    <header>
        <nav class="nav-wrapper colorinicio">
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
        <h2 class="white-text"><span class="colorinicio">Inicio</span></h2>
        <p class="white-text textoaltura"><span class="colorinicio">Después de una excelente cosecha estás listo para continuar con nuevas ideas para crear más vinos artesanales, sin embargo el Rey tiene otros planes, y al ver tu éxito en la temporada decide aumentar un 3000% tus impuestos, lo que rápidamente te obliga a cerrar el viñedo y vender sus tierras, ahora sin nada que perder, emprendes un viaje hacia las tierras del Rey para buscar venganza.</span></p>
        <br><br>
    </div>
    <div class="container">
        <div class="row">
            <form action="escena01.php" method="post" class="col s8 offset-s2">
            <div class="col s10 offset-s1">
                <br>
                <div class="row bordesinicio forminicio">
                    <div class="input-field">
                        <input placeholder="XxX_USU4R10_XxX" name="nombre_usuario" id="nombre_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="nombre_usuario">Nombre de Usuario</label>
                    </div>
                    <div class="input-field">
                        <input placeholder="Color favorito (sera tu contraseña para borrar partida)" name="color_usuario" id="color_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="nombre_usuario">Color favorito</label>
                    </div>
                </div>
            </div>
                <div class="row center-align">
                    <button class="btn waves-effect waves-light botoninicio" type="submit" name="action">Continuar
                        <i class="material-icons right">play_arrow</i>
                    </button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>