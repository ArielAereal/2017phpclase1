<?php
echo "Ejercicio Nº 8 <br> <br>";

    $v= array(1=>90,30=>7,'e'=>99,'hola'=>'mundo');

    foreach($v as $clave => $valor)
    {
        echo $clave ."(clave)=>". $valor."(valor)<br>";
    }

    echo "<br>";
    var_dump($v);

?>