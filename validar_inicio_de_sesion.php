<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$contrasena = $_POST['contraseña'];
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contrasena'";
$resultado = $conn->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php");
    exit();
} else {
    echo "Usuario y/o contraseña incorrectos";
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error - Vuelva a Intentarlo</title>
        <style>
            body {
            margin: 0;
            font-family: 'Segoe UI';
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            letter-spacing: 2px;
        }

        h2 {
            font-size: 1.8rem;
            margin-bottom: 40px;
            color: #e0e0e0;
        }

        .boton-redireccion {
            background-color: #ffffff;
            color: #2c3e50;
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-decoration: none;
        }

        .boton-redireccion:hover {
            background-color: #3498db;
            color: #fff;
            transform: scale(1.05);
        }
        </style>

    </head>
    <body>
        <h1>No se pudo iniciar sesion</h1>
        <h2>Se produjo un error inesperado, intenta iniciar sesión de nuevo.</h2>

        <a href="inicio_de_sesion.php" class="boton-redireccion">Aceptar</a>
    </body>
</html>

