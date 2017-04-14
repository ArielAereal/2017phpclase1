<?php
        echo "Ejercicio Nº 3 <br> <br>";
        
        $a= rand(0,10); 
        $b= rand(0,10); 
        $c= rand(0,10); 

        $cumulodenumeros = array();

        $cumulodenumeros[0] = $a;

        array_push($cumulodenumeros,$b,$c);

         if ($a == $b or $a == $c or $c == $b ) {echo"NO EXISTE VALOR DEL MEDIO <br> <br>";}
         else
            {
                sort($cumulodenumeros);
                echo "El número del medio es: " . ($cumulodenumeros[1]) . "<br> <br>";
            }    

        var_dump($cumulodenumeros) . "<br> <br>";     
 ?>