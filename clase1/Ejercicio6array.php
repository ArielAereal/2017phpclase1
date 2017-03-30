<?php

echo "Ejercicio Nº6";


include "apoyocalculo.php";

$arraydenumeros = array(rand(1,99), rand(160,514),rand(1,10),rand(18,99),rand(-100,100));

$dosa = array("15" => rand(-20,8), "37"=> rand(1,11), "-9"=> rand(0,10), "-12500"=> rand(15,17), "49"=> rand(1,28));

$promedio=0;
$prodos = 0;
$i;

var_dump($arraydenumeros);

echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";

var_dump($dosa);
echo "<br><br>";
echo "<br><br>";

for($i=0;$i<count($arraydenumeros);$i++)
{
    $promedio = $promedio + $arraydenumeros[$i];    
}

foreach ($dosa as $x => $xvalor)
{
    $prodos  = $prodos + $xvalor;
}

$promedio = $promedio/count($arraydenumeros);
$prodos = $prodos/count($dosa);

var_dump($promedio);
echo "<br><br>";

echo $promedio;
echo "<br><br>";

calcular_promedio_seis($promedio);

echo "<br><br>";

calcular_promedio_seis($prodos);

?>