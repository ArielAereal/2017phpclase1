<?php
    echo "Ejercicio Nº 13 <br><br>";

$tamaño = 20;
$primera = "AbrigarPalomasTontasydemasescélebres";
$segunda = "Parcial";
$tercera = "Hoy";


Lapapapalabra($primera,$tamaño);
Lapapapalabra($segunda,$tamaño);
Lapapapalabra($tercera,$tamaño);

function Lapapapalabra ($palabra, $max)
{
    $andrea = 0;   
    $listaxuliar = Llamarlistado();
    if(strlen($palabra)>$max)
    {
        echo "La palabra es demasiado larga. <br>";  
    } else
    {
        
   
       foreach($listaxuliar as $valor)        
        {
        if(strcmp($valor,$palabra) == 0)
        {
            echo "Palabra encontrada en el listado <br>";
            $andrea = 1;
            
        }
        }
        
        if($andrea == 0)
        { echo "Palabra nueva de dimensiones normales";}
        return $andrea;
    }


}

function Llamarlistado()
{
    $lista = array("Recuperatorio","Parcial","Programacion");          
    return $lista;
}    

?>