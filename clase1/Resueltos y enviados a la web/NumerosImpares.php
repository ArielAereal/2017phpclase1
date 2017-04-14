<?php
echo "Ejercicio Nº 7 <br> <br>";
$Imparera = array();
$i;

for($i=-9;$i<11;$i++)
{
    if($i%2!= 0)
    {array_push($Imparera,$i);}
}
echo "For <br><br>";
for($i= 0;$i<count($Imparera);$i++)
{    
     echo $Imparera[$i]. "<br>";
}

echo "While <br><br>";
$i= 0;
while($i<count($Imparera))
{
    echo $Imparera[$i]. "<br>"; 
    $i++;
}

echo "For each <br><br>";
foreach($Imparera as $valor)
{
    echo $valor. "<br>"; 
}

?>