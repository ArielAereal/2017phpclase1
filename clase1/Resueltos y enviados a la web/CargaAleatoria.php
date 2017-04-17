<?php

echo "<br>Encontré un bloque de números aleatorios locos jugando con otro que era más loco que él.<br>Jugaban a comparar promedios, no sé por qué.";

echo "<br><br>Ejercicio Nº6 <br> <br>";

//indexado
$arraydenumeros = array(rand(1,99), rand(160,514),rand(1,10),rand(18,99),rand(-100,100));
//asociativo
$dosa = array(15.8 => rand(-20,8), true=> rand(1,11), false=> rand(0,10), "Anita"=> rand(15,17), "Manzana 49"=> rand(1,28));

$datopromedio=0;
$prodos = 0;
$i;
$cuen;

for($i=0;$i<count($arraydenumeros);$i++)
{
    $datopromedio = $datopromedio + $arraydenumeros[$i];    
}

foreach ($dosa as $x => $xvalor)
{
    $prodos  = $prodos + $xvalor;
}

$datopromedio = $datopromedio/count($arraydenumeros);
$prodos = $prodos/count($dosa);


echo "El promedio del primer bloque de datos es: ";

calcular_promedio_seis($datopromedio);

echo "<br> El promedio del segundo bloque de datos es: ";

calcular_promedio_seis($prodos);

function calcular_promedio_seis($promedio)
{
    if ($promedio == 6 )
    {
        echo "SEIS";
    } elseif ($promedio < 6)
    {
        echo "MENOR A SEIS<br>";
    } else
    {
    echo "MAYOR A SEIS<br>";
    }



}
$cuen = 1;
echo "<br>";
    foreach ($arraydenumeros as $xvalor)
{
    echo "Número $cuen :  $xvalor <br>";
    $cuen++;
}
echo "<br>";
foreach ($dosa as $clave => $xvalor)
{
    echo "Nombre del lugar: $clave, y el número asociado: $xvalor <br>";
}

?>