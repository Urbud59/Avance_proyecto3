<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inicio de sesion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Inicio de sesion.css" rel="stylesheet" type="text/css"/>   
    </head>
        <div class="top-nav">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                </ul>
            </nav>
        </div>
    <body>
        <div id="cuadro">
        <form action="validar_inicio_de_sesion.php" method="POST">
            <p id="titulo">INICIAR SESIÓN</p>
            <br/><br/>
            <label id="subtitulo1">NOMBRE DE USUARIO</label>
            <br/><br/>
            <input type="text" class="entrada" name="usuario" required>
            <br/><br/>
            <label id="subtitulo2">CONTRASEÑA</label>
            <br/><br/>
            <input type="password" class="entrada" name="contraseña" required>
            <br/><br/>
            <input type="submit" value="Iniciar sesión" id="boton"/>
        </form>
        <br/>
    </div>       
    </body>
</html>

