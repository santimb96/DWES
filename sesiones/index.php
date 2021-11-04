<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
if(isset($_SESSION["usuario"])){
    ?>
    <div>
        <h3>Sesión iniciada! <?php print_r($_SESSION["usuario"]) ?></h3>
        <button onclick="location.href='cerrarSesion.php';">Cerrar Sesión</button>
    </div>
<?php
} else {
    ?>
    <div>
        <form action="crearSesion.php" method="post">
        <input type="text" name="nombre">
        <input type="password" name="contraseña">
        <input type="submit" name="submit" value="Enviar!">
        </form>
    </div>
<?php
}
?>

</body>
</html>
