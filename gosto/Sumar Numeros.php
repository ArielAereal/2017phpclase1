<?php

/* Parte 1 - Ejercicios Simples
Aplicación Nº 1 (Sumar números)
Confeccionar un programa que sume todos los números
enteros desde 1 mientras la suma no supere a 1000.
Mostrar los números sumados y al finalizar el proceso
indicar cuantos números se sumaron.*/

# sumar números naturales entre si, while sume < mil

# dice mostrar los números sumados, pero es mostrar el resultado final.

# indicar la cantidad de números involucrados, que es el último número sumado

# naturales

echo "<br>El primero que llega hasta mil sumando numeros ascendentes, gana:<br>YA! uno más dos, tres. ";
echo "Tres más tres, seis. Seis más cuatro, diez. Diez más cinco, tres...<br> <br><br>";
echo "Aplicación N° 1. Sumar Números <br> <br>";      

$contarcien;
$i;
$sumatra = 0;
for ($i=1; $sumatra <1000; $i++)
{     
    $contarcien = $i+1;
    if($sumatra == 0)
    {$sumatra = $sumatra + $i;}
    if ($sumatra + $contarcien>=1000)
    {break;}
    $sumatra = $sumatra + $contarcien;

   // echo "<br>numero vale ".$contarcien;
   # echo "<br>resultado $sumatra";
}

echo "<br>Cantidad total de la suma: ".$sumatra."<br> <br>";
echo "Último número sumado: ".$i;
  
?>