<?php
echo "Muestro un conjunto alocado de objetos en una caja de pandora invisible, o en una Caja de zapatos de Navidad <br>>br>";
echo "Ejercicio Nº 8 <br> <br>";

    $v= array(1=>90,30=>7,'e'=>99,'hola'=>'mundo');

    foreach($v as $clave => $valor)
    {
        echo $clave ."(clave)=>". $valor."(valor)<br>";
    }

    echo "<br>";
    var_dump($v);

?>