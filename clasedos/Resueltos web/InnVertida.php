<?php
   echo "Ejercicio Nº 12 <br> <br>";

   $lacadena_ainvertir = array ();
   
   $lacadena_ainvertir = "Aguante la Gloria, logi loro";

   invertir($lacadena_ainvertir);

   function invertir($cadenaso)
   {
       echo "ANTES: $cadenaso <br> <br> después: ";
        $cadenaso = strtoupper(strrev($cadenaso));

        echo $cadenaso;
   }
?>