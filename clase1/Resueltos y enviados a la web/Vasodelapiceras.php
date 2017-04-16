<?php

echo "Ejercicio Nº 10 <br> <br>";

$i = 0;
$elconte;

$lapicerauno= array('color'=>'gris','marca'=>'bic','trazo'=>'grueso','precio'=>10);

$lapicerados= array('color'=>'negra','marca'=>'silvapen','trazo'=>'grueso','precio'=>20);

$lapiceratres = array('color'=>'rojo','marca'=>'faber','trazo'=>'fino','precio'=>8);

$vasoindex = array
(
      array($lapiceratres),
);

// como no están definidos los espacios del array, no le doy el índice
array_push($vasoindex,$lapicerauno);

// lapicera dos
$vasoindex[2] = array('color'=>'negra','marca'=>'silvapen','trazo'=>'grueso','precio'=>20); 

$vasoasociado = array
(
    "Cara"=> array(),
    "Masomeno"  => array(),
    "Barata" => array($lapiceratres),
);

array_push($vasoasociado['Cara'],$lapicerados);
array_push($vasoasociado['Masomeno'],array('color'=>'gris','marca'=>'bic','trazo'=>'grueso','precio'=>10));

// mostrar los arrayes
// acordate que es una matriz

echo "<br> Muestra: <br><br>";

echo "INDEXADO: <br><br>";

$elconte= count($vasoindex);

MostrarArrayMulti($vasoindex[0][0]);

 for($i=1;$i<$elconte;$i++)
{
    MostrarArrayMulti($vasoindex[$i]);    
}


echo "<br><br> ASOCIATIVO: <br><br>";

MostrarArrayMulti($vasoasociado['Cara'][0]);
MostrarArrayMulti($vasoasociado['Masomeno'][0]);
MostrarArrayMulti($vasoasociado['Barata'][0]);

function MostrarArrayMulti($arrayes)
{
    foreach ($arrayes as $key => $value)
    {
        echo "Atributo: $key Valor: $value <br><br>";
    }
}

?>