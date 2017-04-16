<?php
    // teoria clase dos
    // pego cualquier cosa, los parentesis no hacen falta
   # require produce un fatal error, el include da warning y sigue
   
    //ver desarrollos completos de ajax y php.

    include "calculadora.php";

    $resultado = calculadora::sumar(3,6);

    var_dump($resultado);
    
    //accedo al estatico
    calculadora::$atributostatico = 10;

    // tipo y atributo estatico
    var_dump(calculadora::$atributostatico);

    $micalculadora = new calculadora;

    // los atributos de instancias no llevan $$$$ 
    $micalculadora->atributoinstancia = 135;
    var_dump($micalculadora->atributoinstancia);
?>