<?php
session_start();
unset($_SESSION["usuario"]);
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cerrar Sesión</title>
</head>
<body>
<div>
    <h1>Sesión cerrada con éxito! <?php if(isset($_SESSION["usuario"])){ echo "existe esta sesión!"; } else { echo "existe esta sesión!"; }?></h1>
</div>
</body>
</html>
