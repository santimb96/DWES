<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BURBUJA</title>
</head>
<body>
<?php
$numeros = array(1,3,2,4,6,5);
$ordenado = false;

while (!$ordenado){
    $contador = 0;
    for ($i = 0; $i < count($numeros)-1; $i++){

        if($numeros[$i] > $numeros[$i+1]){
            $numAnt = $numeros[$i];
            $numPost = $numeros[$i+1];
            $numeros[$i] = $numPost;
            $numeros[$i+1] = $numAnt;
            $contador++;
        }
        if($i+2 == count($numeros)){
            if($contador == 0){
                $ordenado = true;
            } else {
                $contador = 0;
            }
        }
    }
}
echo "ORDENADO!";

?>
</body>
</html>
