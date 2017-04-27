<?php

require "figurageometrica.php";

require "triangulo.php";

require "rectangulo.php";

echo "Ejercicio Nº 15 <br><br>";

$tria = new triangulo(3,5);
echo('<pre>');
var_dump($tria);
echo('</pre>');

echo "<br> <br>" . $tria->ToString() . "";


$cuadra = new rectangulo(4,7);
echo('<pre>');
var_dump($cuadra);
echo('</pre>');

echo "<br> <br>" . $cuadra->ToString() . "";


?>