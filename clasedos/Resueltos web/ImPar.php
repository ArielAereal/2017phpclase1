<?php
    echo "Ejercicio Nº 14 <br><br>";

    var_dump(esPar(10));

     var_dump(esImpar(11));

     var_dump(esPar(11));

     var_dump(esImpar(10));

    function esPar($par)
    {
       return Funcionalidad($par);              
    }

    function esImpar($impar)
    {
        return !Funcionalidad($impar);
    }

    function Funcionalidad($numero)
    {
        return $numero%2 == 0;
    }
?>