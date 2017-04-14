<?php
  
echo "Ejercicio N°1 <br> <br>";            

// otra idea es utilizar una variable auxiliar, y si se pasa de mil, romper y fue. Se me ocurrió después...
$i;
$sumados=0;
$ultimonumero;
for($i=1;$sumados<1000;$i++)
{ 
    $sumados += $i;

    if ($sumados >= 1000)
        { 
            $sumados -= $i;
            break; 
        }
}
    $ultimonumero = $i-1;
    echo "Cantidad total de la suma: ".$sumados."<br> <br>";
    echo "Último número sumado: ".$ultimonumero;

?>
