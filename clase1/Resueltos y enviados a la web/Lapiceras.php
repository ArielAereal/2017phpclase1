<?php
echo "Ejercicio Nº 9 <br> <br>";

$lapicerauno= array('color'=>'gris','marca'=>'bic','trazo'=>'grueso','precio'=>10);

$lapicerados= array('color'=>'negra','marca'=>'silvapen','trazo'=>'grueso','precio'=>20);

$lapiceratres = array('color'=>'rojo','marca'=>'faber','trazo'=>'fino','precio'=>8);

echo "Lapicera uno: <br>";
foreach ($lapicerauno as $atributo => $valor)
{
    echo "Tipo de característica: ". $atributo . " => ". $valor. "<br> <br>";
}
echo "Lapicera dos: <br>";
foreach ($lapicerados as $atributo => $valor)
{
    echo "Tipo de característica: ". $atributo . " => ". $valor. "<br> <br>";
}
echo "Lapicera tres: <br>";
foreach ($lapiceratres as $atributo => $valor)
{
    echo "Tipo de característica: ". $atributo . " => ". $valor."<br> <br>";
}
?>