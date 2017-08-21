<?php

/*Aplicación Nº 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date)
y luego imprímala dentro de la página con distintos formatos
(seleccione los formatos que más le guste).

Además indicar que estación del año es.
Utilizar una estructura selectiva múltiple.*/

# manejar la funcion date.

/* https://www.w3schools.com/php/php_date.asp 

timestamp es una marca de tiempo, que todavia no se qué es 

se usa con mktime(hour,etc), devuelve timestamp

date(format,timestamp)

como ejemplo

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

tambien anda con strtotime(...)

caracteres de separación / . -

ver hemisferios

// obtener localización respecto al ecuador. 
// identificar el hemisferio e indicar precisamente la estación del año
 
*/

echo "<br>Un día, a la hora señalada, la Señorita Fecha me preguntó:
<br>¿Con qué vestido me veo mejor en esta Estación de trenes?";
echo "<br><br>Aplicación Nº 2 - Fecha y estación del año <br> <br>";

$dia;
$mes;  
$zonah;
$nummes = date("j");  

date_default_timezone_set("America/Buenos_Aires");

echo date("d/m/y") ."<br> <br>";

echo date("l jS \of F Y e h:i:s A") ."<br><br> ";

// abajo se zarpa Ariel

$dia = date ("l");

Translate_Dia($dia);

echo date(" j ") . "de ";

$mes = date("F");

Translate_Mes($mes);

echo " de " . date("Y ");

$zonah = date("e");

if ($zonah == "America/Buenos_Aires")
{
    echo "Buenos Aires, Argentina.";

} else{ echo date("e");}

echo " Y son las, a ver..." . date(" H:i")."<br> <br>";

$dia = date ("l");

Translate_Dia($dia);

echo date(" j ") . "de ";

$mes = date("F");

Translate_Mes($mes);

echo date (" H:i")."<br><br>";

switch($mes)
{
    case "January":
                    echo ("Mientras estemos en el hemisferio sur, será verano.");
                    break;
    case "February":
                    echo ("Mientras estemos en el hemisferio sur, será verano.");
                    break;
    case "March":                   
                    if ($nummes < 21)
                    {
                   echo ("Mientras estemos en el hemisferio sur, será verano.");
                   } else
                   {
                        echo("Mientras estemos en el hemisferio sur, será otoño.");
                   }
                    break;
   case "April":
                    echo("Mientras estemos en el hemisferio sur, será otoño.");
                    break;
   case "May":
                    echo("Mientras estemos en el hemisferio sur, será otoño.");
                    break;
    case "June":
                    if ($nummes < 22)
                    {
                    echo("Mientras estemos en el hemisferio sur, será  otoño.");
                    } else
                    {
                        echo("Mientras estemos en el hemisferio sur, será invierno.");
                    }
                    break;
    case "July":                
                    echo("Mientras estemos en el hemisferio sur, será invierno.");
                    break;
    case "August":                
                    echo("Mientras estemos en el hemisferio sur, será invierno.");
                    break;
    case "September":                
                    if ($nummes < 22)
                    {
                    echo("Mientras estemos en el hemisferio sur, será invierno.");
                    } else
                    {
                        echo("Mientras estemos en el hemisferio sur, será primavera.");
                    }
                    break;
    case "October":                
                    echo("Mientras estemos en el hemisferio sur, será primavera.");
                    break;
    case "November":                
                    echo("Mientras estemos en el hemisferio sur, será primavera.");
                    break;
    case "December":                
                    if ($nummes < 21)
                    {
                    echo("Mientras estemos en el hemisferio sur, será primavera.");
                    } else
                    {
                        echo("Mientras estemos en el hemisferio sur, será verano.");
                    }
                    break;
    }

function Translate_Dia ($dia)
{
    switch ($dia)
    {
    case "Monday":
                    echo ("lunes");
                    break;
    case "Tuesday":
                    echo ("martes");
                    break;
    case "Wednesday":
                        echo ("miércoles");
                        break;
    case "Thursday":
                    echo ("jueves");
                    break;
    case "Friday":
                    echo ("viernes");
                    break;
    case "Saturday":
                        echo ("sábado");
                    break;
    case "Sunday":                
                    echo ("domingo");
                    break;
    }

}

function Translate_Mes($mes)
{
switch ($mes)
{
    case "January":
                    echo ("enero");
                    break;
    case "February":
                    echo ("febrero");
                    break;
    case "March":
                    echo ("marzo");
                    break;
    case "April":
                    echo ("abril");
                    break;
    case "May":
                    echo ("mayo");
                    break;
    case "June":
                    echo ("junio");
                    break;
    case "July":                
                    echo ("julio");
                    break;
    case "August":                
                    echo ("agosto");
                    break;
    case "September":                
                    echo ("septiembre");
                    break;
    case "October":                
                    echo ("octubre");
                    break;
    case "November":                
                    echo ("noviembre");
                    break;
    case "December":                
                    echo ("diciembre");
                    break;                                                                                
}

}
?>