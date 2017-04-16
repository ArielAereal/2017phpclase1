<?php

include "Punto.php";
include "Rectangulo.php";

$elpuntouno = new Punto(1,8);



var_dump($elpuntouno);

echo"<br><br>";
echo"<br><br>";

$sumadepuntos = $elpuntouno->GetX() + $elpuntouno->GetY();

var_dump($sumadepuntos);

echo"<br><br>";
echo"<br><br>";

$primerrectangulo = new Rectangulo($elpuntouno,new Punto(2,3));

var_dump($primerrectangulo);    

?>