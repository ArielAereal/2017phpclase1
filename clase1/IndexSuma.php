<?php
   /* $nombre = "Felisa";

    echo "Hola Mundo <br>";

    echo $nombre."<br>";

    echo "Hola ".$nombre."<br><br>";

   // var_dump () muestra arrays y objetos

   

   /* while ($suma < 1000)
   {
        $suma=$numero+$suma;           
            $numero = $numero+1;
            $cuenta = $cuenta+1;      

            if( $suma >1000 || $suma == 1000)
            {
                $numero = $numero -1;
                $suma = $suma - $numero;
                $cuenta = $cuenta - 1;
                break;
            }
            
   }*/
   //intento dos
   $numeroinicial = 1;
   $suma = 0;
   $cuentaynumero = 2;

   $suma = $numeroinicial + $cuentaynumero;

   while ($suma < 1000)
    {
    
    $cuentaynumero = $cuentaynumero + 1;     
    $suma = $cuentaynumero+$suma;

    if(1000-$suma < 0 )   
        {
        $suma = $suma-$cuentaynumero;
        $cuentaynumero = $cuentaynumero-1;
        break;
        }
   
    }
    $cuentaynumero = $cuentaynumero+2;
   echo "Cantidad de números utilizados: ".$cuentaynumero."<br>";
   
   echo "Resultado de la suma: ".$suma."<br>"; 
?>
