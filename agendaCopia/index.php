<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>agenda</title>
    <style>
        .lista{
            color: darkred;
            position: absolute;
            top: 150px ;
        }
    </style>
</head>
<body>
<?php
/**
 * TODO 0: CONTACTOS
 */
$agenda = ""; //almacenamos los datos en tiempo real del contenido de la agenda
$nombre = ""; //almacenamos nombre del contacto
$telefono = ""; //almacenamos telefono del contacto
$render = "";

/**
 * TODO 1: CONTROL DE CASOS
 */

if (isset($_GET["submit"])) { //comprobamos que obtenemos campo submit (que existe)

    /**
     * establecemos a las variables del principio los datos obtenidos de los inputs
     */
    $nombre = $_GET["nombre"];
    $telefono = $_GET["telefono"];
    $agenda = $_GET["agenda"];

    if (empty($nombre)) {
        echo '<script language="javascript">alert("CAMPO DE NOMBRE VACÍO!");</script>'; //si el campo de nombre esta vacio, mediante la etiqueta script lanzamos un alert propio de js
        //encuentro que es una manera mas elegante que la de lanzar un echo de error sin formato
    } /**
     * ELIMINAR ULTIMO CONTACTO
     */
    else if (empty($telefono)) {

        $ultima_coma = strripos($agenda, ",");

        $agenda = substr($agenda, 0, $ultima_coma);
        displayData($agenda);

    } else {
        $agenda .= ",NOMBRE: " . strtoupper($nombre) . " TELEFONO: " . strtoupper($telefono);
        displayData($agenda);
    }
}
?>
<form>
    <h1>AGENDA 2022</h1>
    <label for="nombre">NOMBRE<input type="text" name="nombre"/></label>
    <label for="telefono">TELEFONO<input type="text" name="telefono"/></label>
    <input type="hidden" name="agenda" value="<?= $agenda; ?>"/>
    <input type="submit" name="submit"/>
</form>
<div>
    <h2>CONTACTOS</h2>

    <div>
        <?php

        function displayData($data)
        {

            $render = "<ul class='lista'>"; //creamos una variable render que se encargara de almacenar lo que se renderizara en la pagina
            $extraer_coma = explode(",", $data); //extraemos por coma
            $arreglo = array_slice($extraer_coma, 1); //extraemos la posicion 0 vacia que deja explode
            foreach ($arreglo as $contacto) {
                $render .= "<li>" . $contacto . "</li>"; //recorremos la lista de contactos y los concatenamos al render
            }
            $render .= "</ul>"; //cerramos render
            echo $render; //pintamos render
        }
        ?>
    </div>
</div>

</body>
</html>
