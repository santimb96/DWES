<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
$contactos = "";
$nombre = "";
$email= "";
$contactos = [];

/*if(isset($_GET["contactos"])){
    $contactos = $_GET["contactos"];
} else {
    $contactos = [];
}*/


if(isset($_GET["submit"])){
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];

    if(empty($nombre)){
     echo "EL NOMBRE ESTÁ VACÍO";
    } elseif (empty($email)){
        unset($contactos[$nombre]);
    } else {
        $contactos[$nombre] = $email;
    }
}
var_dump($contactos);

?>
<h1>AGENDA</h1>
<form>
    <input type="text" name="nombre"/>
    <input type="text" name="email"/>
    <input type="submit" value="Envia!"/>
</form>
<h2>CONTACTOS</h2>
<?php

?>
</body>
</html>
