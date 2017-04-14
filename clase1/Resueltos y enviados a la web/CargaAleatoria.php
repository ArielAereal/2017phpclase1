<?php

echo "Ejercicio Nº6 <br> <br>";
//indexado
$arraydenumeros = array(rand(1,99), rand(160,514),rand(1,10),rand(18,99),rand(-100,100));
//asociativo
$dosa = array(15.8 => rand(-20,8), true=> rand(1,11), false=> rand(0,10), "Anita"=> rand(15,17), "Manzana 49"=> rand(1,28));

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

echo "<br><br>";
echo "El promedio del primer bloque de datos es: ";

calcular_promedio_seis($promedio);

echo "<br><br> El promedio del segundo bloque de datos es: ";

calcular_promedio_seis($prodos);

function calcular_promedio_seis($promedio)
{
    if ($promedio == 6 )
    {
        echo "SEIS";
    } elseif ($promedio < 6)
    {
        echo "MENOR A SEIS";
    } else
    {
    echo "MAYOR A SEIS";
    }

}

?>