<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
class Prueba{
    protected string $var1;
    protected string $var2;

    public function asignarValores(){
        $this->var1 = "hola";
        $this->var2 = "mundo!";
    }
    public function pintarValores($var3){
        echo $this->var1." ".$this->var2." ".$var3. "<br>";
    }
}
class Hijo extends Prueba{
    public function pintarValores($var3)
    {
        echo $this->var1;
    }
}
$prueba = new Hijo();
$prueba->asignarValores();
$prueba->pintarValores("mio");
?>
</body>
</html>
