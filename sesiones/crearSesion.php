<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
global $nombre;
global $contraseña;

$usuario = [];

if(isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];

    $usuario[$nombre] = $contraseña;

    $_SESSION["usuario"] = $usuario;

    mostrar();
}

function mostrar(){
    ?>
    <div>
        <h1>Sesión creada!</h1>
    </div>

    <div>
        <button onclick="location.href='cerrarSesion.php';">Cerrar Sesión</button>
        <button onclick="location.href='index.php';">Form Sesión</button>
    </div>
<?php
}
?>
</body>
</html>
