<?php

echo "Ejercicio Nº 19<br><br>";

require "Pasajero.php";
require "Vuelo.php";

$pabordo = new Pasajero("Elcartero","Juan","72733752",false);
echo "<pre>";

#no muestra el bool false: 
echo $pabordo->Equals(new Pasajero("Killman","Sonia","54333056",true));
var_dump($pabordo->Equals(new Pasajero("Killman","Sonia","54333056",true)));
var_dump($pabordo->Equals($pabordo));
echo Pasajero::MostrarPasajero($pabordo);
echo "<br><br>";
$primervuelo = new Vuelo("American Airlines",500,2);
echo $primervuelo->MostrarVuelo();
echo "<br><br>";
$primervuelo->AgregarPasajero($pabordo);
$primervuelo->AgregarPasajero($pabordo);
$primervuelo->AgregarPasajero(new Pasajero("Pastore","Anita",12368854,true));
$primervuelo->AgregarPasajero(new Pasajero("Pastore","Anita",12368854,true));
echo $primervuelo->MostrarVuelo();
$tarde = new Pasajero("Sorsa","Juan",37887546,false);
echo "<br><br>";
$primervuelo->AgregarPasajero($tarde);
echo "<br><br>";
$vuelta = new Vuelo("Aerolineas Argentinas",1000,3);
$vuelta->AgregarPasajero(new Pasajero("Diaz","Ruben",5666780,false));
$vuelta->AgregarPasajero(new Pasajero("Juarez","Leticia",14555231,true));
$vuelta->AgregarPasajero(new Pasajero("Malermann","Osvaldo",55777120,true));
var_dump(Vuelo::Add($primervuelo,$vuelta));
echo "<br><br>";
Vuelo::Remove($primervuelo,$pabordo);
Vuelo::Remove($primervuelo,$pabordo);
Vuelo::Remove($vuelta,$pabordo);
Vuelo::Remove($vuelta,new Pasajero("Diaz","Ruben",5666780,false));
var_dump($primervuelo);
var_dump($vuelta);
echo "<br><br>";
echo "</pre>";
?>