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
<div class="indexwp">
    <header>
        <nav class="nav-wrapper colorindex">
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
        <h2 class="white-text"><span class="colorindex">Borrar datos en DB</span></h2>
        <br><br>
    </div>
    <div class="container">
        <div class="row">
            <form action="soulkillerpartida.php" method="post" class="col s8 offset-s2 bordesindex formindex">
            <div class="col s10 offset-s1">
                <h4 class="white-text center-align">Borrar Partida</h4>
                <br>
                <div class="row" >
                    <div class="input-field">
                        <i class="material-icons prefix white-text">account_circle</i>
                        <input placeholder="XxX_USU4R10_XxX" name="nombre_usuario" id="nombre_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="nombre_usuario">Nombre de Usuario</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="input-field">
                        <input placeholder="Color favorito" name="color_usuario" id="color_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="color_usuario">Color favorito</label>
                    </div>
                </div>
                <div class="row center-align">
                    <button class="btn waves-effect waves-light botonindex" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <br>
            </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="soulkillerextra.php" method="post" class="col s8 offset-s2 bordesindex formindex">
            <div class="col s10 offset-s1">
                <h4 class="white-text center-align">Borrar Datos Encuesta Extra</h4>
                <br>
                <div class="row" >
                    <div class="input-field">
                        <i class="material-icons prefix white-text">account_circle</i>
                        <input placeholder="XxX_USU4R10_XxX" name="nombre_usuario" id="nombre_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="nombre_usuario">Nombre de Usuario</label>
                    </div>
                </div>
                <div class="row center-align">
                    <button class="btn waves-effect waves-light botonindex" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <br>
            </div>
            </form>
        </div>
    </div>
</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>