<?php

$tablaMultiplicar = function (){
    $numeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    define("ITERADOR", 11);

    $tabla = "<body style='background: rebeccapurple'><table><tbody>";

    for ($i = 0; $i < count($numeros); $i++) {

        for ($j = 1; $j < ITERADOR; $j++) {

            $resultado = $numeros[$i] * $j;
            $tabla .= "<tr style='display:inline; color: yellow ; border: yellow 1px solid;' ><td style='text-align: center; vertical-align: middle;'>$resultado</td>";
        }

        $tabla .= "</tr>";
        $tabla .= "</tbody></table></body>";
        echo $tabla;
        $tabla = "<body style='background: rebeccapurple'><table>";
    }
};
$tablaMultiplicar();





