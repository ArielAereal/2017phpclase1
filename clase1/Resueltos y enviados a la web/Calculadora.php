<?php

    echo "Ejercicio Nº 4 <br> <br>";
    
    /* Operador debería almacenar + - * / pero el random tiene un estilo mejorado. La salida no depende del operador, sino
       que solamente afecta a la entrada del switch*/
    $operador = rand(1,4);    
    $op1 = rand(1,20);
    $op2 = rand(-1,3);
    $salida = 0;

    switch($operador)
      {
		  case 1: 
              echo "SUMA! <br> <br> EL RESULTADO ES: " . $salida = $op1 + $op2;                    
	  	        break;
	
		  case 2:
              echo "RESTA! <br> <br> EL RESULTADO ES: " . $salida = ($op1 - $op2);
	  	        break;
	
      case 3:
              echo "MULTIPLICA! <br> <br> EL RESULTADO ES:" . $salida = ($op1 * $op2);
	  	        break;

      case 4:
              if ($op2 == 0)
                {
                  echo "Imposible dividir por cero";
                  break;
                } else {                   
                  echo "DIVIDE! <br> <br> EL RESULTADO ES:" . round($salida = ($op1 / $op2),3,PHP_ROUND_HALF_UP);
                  break;}
	    }

    echo "<br> <br>" . $op1 . "<br> <br>" . $op2;    
?>