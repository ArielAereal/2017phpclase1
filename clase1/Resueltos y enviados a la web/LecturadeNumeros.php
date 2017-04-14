<?php
    echo "Ejercicio Nº 5 <br> <br>";

    $num = rand(20,60);
    $texto;
    $digito = 0;
    $decena = 0;
    $salidafinal;

    switch ($num)
    {
        case 20:
                echo "Veinte";
                break;
        case 30:     
                echo "Treinta";
                break;
        case 40:
                echo "Cuarenta";
                break;
        case 50:     
                echo "Cincuenta";
                break;       
        case 60:     
                echo "Sesenta";
                break;
        default:
                $digito = $num%10;
                $salidafinal;
                $texto = (string)$num;
                $decena = substr(strrev($texto),1);
                
                switch($decena)
                {                                 
                  case 3:
                         $salidafinal = "Treinta";
                         break;      
                  case 4:   
                         $salidafinal = "Cuarenta";
                         break;
                  case 5:
                        $salidafinal = "Cincuenta";
                         break;          
                  default:
                        $salidafinal = "Veinti";
                }
                
                if ($decena == 2)
                {
                switch($digito)
                {    
                    case 1:
                             $salidafinal .="uno";
                            break;
                    case 2:
                             $salidafinal .="dos";
                            break;        
                    case 3:
                             $salidafinal .="tres";
                            break;        
                    case 4:
                             $salidafinal .="cuatro";
                            break;
                    case 5:
                             $salidafinal .="cinco";
                            break;        
                    case 6:
                             $salidafinal .="seis";
                            break;
                    case 7:
                             $salidafinal .="siete";
                            break;
                    case 8:
                             $salidafinal .="ocho";
                            break;        
                    case 9:
                             $salidafinal .="nueve";
                            break;                
                }           
                } else{

                switch($digito)
                {
                    case 1:
                             $salidafinal .=" y uno";
                            break;
                    case 2:
                             $salidafinal .=" y dos";
                            break;        
                    case 3:
                             $salidafinal .=" y tres";
                            break;        
                    case 4:
                             $salidafinal .=" y cuatro";
                            break;
                    case 5:
                             $salidafinal .=" y cinco";
                            break;        
                    case 6:
                             $salidafinal .=" y seis";
                            break;
                    case 7:
                             $salidafinal .=" y siete";
                            break;
                    case 8:
                             $salidafinal .=" y ocho";
                            break;        
                    case 9:
                             $salidafinal .=" y nueve";
                            break;                
                }

                }

                echo $salidafinal;
                break;
    }                           

    echo "<br> <br> $num";     
?>