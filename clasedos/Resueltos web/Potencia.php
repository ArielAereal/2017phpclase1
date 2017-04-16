<?php

echo "Ejercicio Nº 11 <br> <br>"

$numerouno =4;
$numerodos =4;

potenciadeep($numerouno,$numerodos);

function potenciadeep($topecuenta,$toperastrillo)
{
    $cuenta;
    $rastrillo;
    for($cuenta =1;$cuenta <$topecuenta+1;$cuenta++)
    {
        for($rastrillo =1;$rastrillo<$toperastrillo+1;$rastrillo++)
        {
            echo "<br> $rastrillo elevado a la $cuenta:  " . pow($rastrillo,$cuenta);
        }
    }
}

?>