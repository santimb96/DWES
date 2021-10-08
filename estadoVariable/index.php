<?php

$var = "";
define("VALUES", array(null, 0, true, false, "0", "", "foo", array(), "unset" => function(){
    unset($GLOBALS["var"]);
    return $GLOBALS["var"];
}));


static $render = "<table>";


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
$is_unset = function ($var) {
    unset($var);
    if(isset($var)){
        return "true";
    }
    return "false";
};

for ($i = 0; $i < count(VALUES); $i++) {
    $render .= "<tr style='border: black 1px solid;'><td>" . $is_set(VALUES[$i]) . "</td>" .
        "<td>" . $is_empty(VALUES[$i]) . "</td>" .
        "<td>" . $is_boolean(VALUES[$i]) . "</td></tr>";
};
//$render .= "<td>" .$is_unset($GLOBALS["var"]). "</td></tr>";

$render .= "</table>";

echo $render;




