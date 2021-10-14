<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>agenda</title>
</head>
<body>
<?php
$lista=[];

 if(!isset($_GET["submit"])){
     echo "";
 } else {
     var_dump($_GET);

     $nombre = $_GET["nombre"];
     $email = $_GET["email"];
     $contactos = $_GET["lista"];

     //$contacto= array("nombre" => $nombre, "email" =>  $email);
     //array_push($contactos, $contacto);
     $contactos["nombre"] = $nombre;
     $contactos["email"] = $email;
     print_r($contactos);
     //print_r($lista);
     //$lista[] = $contactos;

     /*for ($i = 0; $i < count($contactos); $i++){
         if(empty($contactos[$i])){
             $lista[$i] = $contactos[$i];
             break;
         }
     }*/

    //print_r(gettype($contactos));
     //print_r($lista);
     displayData($contactos);
 }

?>
<form>
    <h1>AGENDA 2022</h1>
    <label for="nombre"><input type="text" name="nombre[]"/></label>
    <label for="email"><input type="text" name="email[]"/></label>
    <input type="hidden" name="lista[]" value="<?= $lista; ?>"/>
    <input type="submit" name="submit"/>
</form>
<h2>CONTACTOS</h2>
<div>
    <?php

    //$lista[] = $contactos;
    //print_r(gettype($lista));

    print_r($lista);
    function displayData($data){
        $render = "<ul>";

        foreach ($data as $key => $value){

            $render .= "<li>".$key. ": "."$value". "</li>";
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
