<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php

var_dump($_GET);
/*if(isset($_GET["submit"])){

}*/
?>
<form>
    <input type="text" name="contacto[]" value="Santi"/>
    <input type="text" name="tlf[]"/>
    <input type="submit" name="submit" value="Enviar"/>
</form>
</body>
</html>
