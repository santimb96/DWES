<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>spl_autoload_register</title>
</head>
<body>
<?php
$clases = [
        "Persona" => "Persona.php"
];
function autocarga($nombre_clase){
    global $clases;
    $arreglo_nombre = strtoupper($nombre_clase[0]).substr($nombre_clase, 1);
    //require_once $arreglo_nombre.".php";
    include $clases[$arreglo_nombre];
}
spl_autoload_register("autocarga");

$persona = new persona();
echo $persona->
mensaje(); //persona.mensaje()
?>
</body>
</html>
