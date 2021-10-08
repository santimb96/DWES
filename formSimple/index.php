<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formPHP</title>
</head>
<body>

<?php
//type your code here


function isEmpty()
{
    if ($_GET["submit"] && !empty($_GET["submit"]) !== null) {
        $nombre = $_GET["nombre"];
        $edad = $_GET["edad"];
        $correo = $_GET["correo"];

        echo $nombre." ,". $edad. " ," .$correo;
    }
}
isEmpty();
?>
<div>
    <form>
        <h1 id="h1">REGISTRO USUARIO</h1>
        <label for="nombre">NOMBRE
            <input type="text" name="nombre">
        </label>

        <label for="edad">EDAD
            <input type="text" name="edad">
        </label>

        <label for="correo">CORREO
            <input type="text" name="correo">
        </label>
        <input type="submit" name="submit"/>
    </form>
</div>
</body>
</html>
