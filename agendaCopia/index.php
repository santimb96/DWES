<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>agenda</title>
</head>
<body>
<?php
$agenda = "";
$nombre = "";
$email = "";
$longitud_agenda = strlen($agenda);

if(isset($_GET["submit"])){
    //var_dump($_GET);
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $agenda = $_GET["agenda"];

    if (empty($nombre)){
        echo "ESTÁ VACÍO EL NOMBRE!";
    } elseif (empty($email)){
        for ($i =  $longitud_agenda; $i > 0; $i--){
            if($agenda[$i] === ","){
                break;
            }
            $agenda[$i] = "";
        }
    } else {
        $agenda .= ",nombre: ".$nombre." email: ".$email;
        displayData($agenda);
    }






}


?>
<form>
    <h1>AGENDA 2022</h1>
    <label for="nombre"><input type="text" name="nombre"/></label>
    <label for="email"><input type="text" name="email"/></label>
    <input type="hidden" name="agenda" value="<?= $agenda; ?>"/>
    <input type="submit" name="submit"/>
</form>
<h2>CONTACTOS</h2>
<div>
    <?php

    function displayData($data){

        $render = "<ul>";
        $arreglo = explode(",", $data);
        foreach ($arreglo as $contacto){
            $render .= "<li>".$contacto. "</li>";
        }
        $render .= "</ul>";

        echo $render;

    }
    ?>
</div>
<?php
//type your code here
?>
</body>
</html>
