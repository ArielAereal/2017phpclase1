<?php

    echo "Ejercicio Nº 20<br><br>";

    require_once "Operario.php";
    require_once "Fabrica.php";

    $soldadoraso = new Operario(1306,"Ryan","Marecelo");
    $elinfiltrado = new Operario(700707,"Diaz","Ramon");
    echo "<pre>"; 
    $soldadoraso->SetAumentarSalario(50);
    echo Operario::Mostrar($soldadoraso);
    echo "<br><br>";
    $guaymayen = new Fabrica("Guaymayén S.R.L 2017");
    echo "<br><br>";       
    //inaccesible por ser privado
    //$guaymayen->MostrarOperarios(); 

    echo "<br><br>";
    $guaymayen->Add($elinfiltrado);
    var_dump(Fabrica::Equals($guaymayen,$elinfiltrado));
    var_dump(Fabrica::Equals($guaymayen,$soldadoraso));
    echo "<br><br>";
    $guaymayen->Add($soldadoraso);
    echo "<br><br>";    
    $guaymayen->Add($soldadoraso);
    echo "<br><br>";
    $guaymayen->Mostrar();    
    echo "<br><br>";
    $guaymayen->Add(new Operario(505,"Gutierrez","Roberto"));
    $guaymayen->Add(new Operario(1515,"Pardo","Daniela"));
    $guaymayen->Add(new Operario(703,"Gilberto","Nazarena"));
    $guaymayen->Add(new Operario(666,"Dios","Joaquin"));
    echo "<br><br>";
    $guaymayen->Mostrar();    
    echo "<br><br>";
    $guaymayen->Remove(new Operario(666,"Dios","Joaquin"));
    echo "<br><br>";
    $guaymayen->Remove(new Operario(1515,"Pardo","Daniela"));
    echo "<br><br>";
    $guaymayen->Remove(new Operario(1515,"Pardo","Daniela"));
    echo "<br><br>";
    $guaymayen->Remove($elinfiltrado);
    echo "<br><br>";
    $guaymayen->Mostrar(new Operario(1515,"Pardo","Daniela"));    
    echo "</pre>";    
?>