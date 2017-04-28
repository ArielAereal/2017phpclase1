<?php

require "Punto.php";
require "Rectangulo.php";

echo "Ejercicio Nº 16 <br> <br>";

$elpuntouno = new Punto(1,2);
$primerrectangulo = new Rectangulo($elpuntouno,new Punto(10,35));
$primerrectangulo->Dibujar();

?>