<?php

const HEADERS = array('Contenido de $var', 'isset($var)', 'empty($var)', '(bool)($var)');
const WAYS = array('$var = null', '$var = 0', '$var = true', '$var = false', '$var = 0', '$var = ""', '$var = foo', '$var = array()', 'unset($var)');
define("VALUES", array(null, 0, true, false, "0", "", "foo", array(), $var));
unset($var);

$render = "<table style=' border: 1px solid black;'>";


$is_set = function ($var) {
    if (isset($var)) {
        return "true";
    }
        return "false";
};

$is_empty = function ($var) {
    if (empty($var)) {
        return "true";
    }
        return "false";
};

$is_boolean = function ($var) {
    if ($var === true) {
        return "true";
    }
        return "false";
};

$render .= "<tr>";
for ($j = 0; $j < count(HEADERS); $j++){
    $render .= "<th style=' border: 1px solid black;'>" . HEADERS[$j] . "</th>";

}
$render .= "</tr>";
for ($i = 0; $i < count(VALUES); $i++) {

    $render .= "<tr><td style=' border: 1px solid black;'>" . WAYS[$i] . "</td>" .
        "<td style=' border: 1px solid black;'>" . $is_set(VALUES[$i]) . "</td>".
        "<td style=' border: 1px solid black;'>" . $is_empty(VALUES[$i]) . "</td>" .
        "<td style=' border: 1px solid black;'>" . $is_boolean(VALUES[$i]) . "</td></tr>";
}

$render .= "</table>";

echo $render;




