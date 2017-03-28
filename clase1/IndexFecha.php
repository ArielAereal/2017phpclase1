<?php

echo "Ejercicio Nº 2 <br><br>";

$dia;
$mes;  
$zonah;
$nummes = date("j");  

date_default_timezone_set("America/Buenos_Aires");

// echo date("t"); la t me da el total de dias del mes de la funcion date, en marzo tira 31

echo date("d/m/y")."<br><br>";

echo date("l jS \of F Y e h:i:s A")."<br><br> ";

$dia = date ("l");

Translate_Dia($dia);

echo date(" j "). "de ";

$mes = date("F");

Translate_Mes($mes);

echo date (" Y ");

$zonah = date("e");

if ($zonah == "America/Buenos_Aires")
{
    echo "Buenos Aires, Argentina ";
} else{ echo date("e");}

echo date (" H:i")."<br><br>";

$dia = date ("l");

Translate_Dia($dia);

echo date(" j "). "de ";

$mes = date("F");

Translate_Mes($mes);

echo date (" H:i")."<br><br>";

//tira error en el switch, revisar otra vez (faltaba cerrar la última llave del if de diciembre)

// podría sobrecargar el método translate mes, pero no tengo la clase para hacerlo

switch($mes)
{
    case "January":
                    echo ("Estamos en verano.");
                    break;
    case "February":
                    echo ("Estamos en verano.");
                    break;
    case "March":                   
                    if ($nummes < 21)
                    {
                   echo ("Estamos en verano.");
                   } else
                   {
                        echo("Estamos en otoño.");
                   }
                    break;
   case "April":
                    echo("Estamos en otoño.");
                    break;
   case "May":
                    echo("Estamos en otoño.");
                    break;
    case "June":
                    if ($nummes < 22)
                    {
                    echo("Estamos en otoño.");
                    } else
                    {
                        echo("Estamos en invierno.");
                    }
                    break;
    case "July":                
                    echo("Estamos en invierno.");
                    break;
    case "August":                
                    echo("Estamos en invierno.");
                    break;
    case "September":                
                    if ($nummes < 22)
                    {
                    echo("Estamos en invierno.");
                    } else
                    {
                        echo("Estamos en primavera.");
                    }
                    break;
    case "October":                
                    echo("Estamos en primavera.");
                    break;
    case "November":                
                    echo("Estamos en primavera.");
                    break;
    case "December":                
                    if ($nummes < 21)
                    {
                    echo("Estamos en primavera.");
                    } else
                    {
                        echo("Estamos en verano.");
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