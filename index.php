<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="proyecto_estilo.css">
    <link rel="stylesheet" href="textoinput_blanco.css">

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
                <a href="#" class="brand-logo">Proyecto</a>
                <ul class="right">
                    <li> <a class="navclase" href="#"> Tu camino</a></li>
                    <li> <a class="navclase" href="#"> Camino Global</a></li>
                    <li> <a class="navclase" href="#"> Borrar Partida</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h2 class="white-text"><span class="colorindex">Explicacion del proyecto</span></h2>
        <p class="white-text textoaltura"><span class="colorindex">El objetivo de este proyecto es demostrar la creacion de una base de datos y las tablas que la conforman, asi como el insertar, actualizar, visualizar y eliminar sus diferentes datos, todo esto aplicado para administrar la toma de diferentes deciciones dentro de una pequeña aventura de texto </span></p>
        <br><br>
        <div class="center-align"><a class="waves-effect waves-light btn-large botoninicio" href="#">Comenzar</a></div>
        <br><br><br><br><br>
    </div>
    <div class="container">
        <div class="row">
            <form action="#" method="post" class="col s8 offset-s2 forminicio">
            <div class="col s10 offset-s1">
                <h4 class="white-text center-align">Encuesta Random Extra</h4>
                <br>
                <div class="row" >
                    <div class="input-field">
                        <i class="material-icons prefix white-text">account_circle</i>
                        <input placeholder="XxX_USU4R10_XxX" id="nombre_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="nombre_usuario">Nombre de Usuario</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="input-field">
                        <i class="material-icons prefix white-text">email</i>
                        <input placeholder="Correo" id="correo_usuario" type="email" class="white-text" required>
                        <label class="white-text" for="correo_usuario">E-mail</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="input-field">
                        <i class="material-icons prefix white-text">videogame_asset</i>
                        <input placeholder="Si escribes LoL busca ayuda" 
                        id="vg_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="vg_usuario">Videojuego Favorito</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="input-field">
                        <i class="material-icons prefix white-text">music_note</i>
                        <input placeholder="Aurora my beloved" id="music_usuario" type="text" class="white-text" required>
                        <label class="white-text" for="music_usuario">Cancion Favorita</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="input-field">
                        <i class="material-icons prefix white-text">format_quote</i>
                        <input placeholder="Nyanyame nyanyajyuunyanya-do no nyarabi de nyakunyaku inyanyaku nyanyahan nyanyadai nyanynaku nyarabete nyaganyagame
                        " id="quote_usuario" type="text" class="white-text">
                        <label class="white-text" for="quote_usuario">Escribe algo o pegalo del portapapeles nose (opcional)</label>
                    </div>
                </div>
                <div class="row center-align">
                    <button class="btn waves-effect waves-light botoninicio" type="submit" name="action">Submit
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