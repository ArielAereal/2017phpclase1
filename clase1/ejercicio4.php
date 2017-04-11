<?php

    echo "Ejercicio Nº 4 <br> <br>";

    // como hago para asignar operadores a la variable $operador??


    
    $operador = '/';    
    $op1 = rand(1,20);
    $op2 = rand(0,2);
    $salida = 0;
    switch($operador)
    {
		case '+': echo "EL RESULTADO ES:" . $salida = $op1 + $op2;                    
	  	            break;
	
		case '-':echo "EL RESULTADO ES:" . $salida = ($op1 - $op2);
	  	            break;
	
        case '*':echo "EL RESULTADO ES:" . $salida = ($op1 * $op2);
	  	        break;

        case '/':
                if ($op2 == 0)
                {
                  echo "Imposible dividir por cero";
                  break;
                } else {
                echo "EL RESULTADO ES:" . $salida = ($op1 / $op2);
                break;}
	}

    echo "<br> <br>" . $op1 . "<br> <br>" . $op2;
    
?>