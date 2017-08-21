<?php

echo "Ejercicio Nº 17 <br> <br>";

require "Auto.php";
// uno
$unauto = new Auto("Ford Ka","Champán",15,50);
$tresauto = new Auto("Ford Ka","Azul",16);
//dos
$otroauto = new Auto("Clio","Gris",75000);
$otroautodos = new Auto("Clio","Gris",65000);
$otroautotres = new Auto("Clio","Gris",40000);

$otroauto->AgregarImpuestos(1500);
$otroautodos->AgregarImpuestos(1500);
$otroautotres->AgregarImpuestos(1500);

echo "Sumo los primeros dos autos: ";
echo Auto::Add($unauto,$tresauto);

echo "<br> Comparo el primer auto y el segundo: ";
echo $unauto->Equals($tresauto);
echo "<br> Comparo el primer auto y el quinto: ";
var_dump($unauto->Equals($otroautotres));
echo "<br> Muestro los autos impares: <br>";
Auto::Mostrarauto($unauto);
Auto::Mostrarauto($otroauto);
Auto::Mostrarauto($otroautotres);

?>