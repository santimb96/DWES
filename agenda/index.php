<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>agenda</title>
</head>
<body>
<?php

 if(!isset($_GET["submit"])){
    echo "";
 } else {
     $nombre = $_GET["nombre"];
     $email = $_GET["email"];
     $contactos = $_GET["lista"];

     $contacto= array("nombre" => $nombre, "email" =>  $email);
     array_push($contactos, $contacto);
     $lista[] = $contacto;
     print_r($contactos);
     print_r($lista);

     displayData($contactos);
 }

?>
<form>
    <h1>AGENDA 2022</h1>
    <label for="nombre"><input type="text" name="nombre"/></label>
    <label for="email"><input type="text" name="email"/></label>
    <input type="hidden" name="lista[]" value="<?= $lista=[] ?>"/>
    <input type="submit" name="submit"/>
</form>
<h2>CONTACTOS</h2>
<div>
    <?php
    function displayData($data){
        $render = "<ul>";

        foreach ($data as $value){
            $render .= "<li>"."$value". "</li>";
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