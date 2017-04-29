<?php

    require "Auto.php";

    require "Garage.php";

    $elsobreviviente = new Auto("Torino","Tinto",150000,date("d/m/y"));
    $elacompañante = new Auto("BMW","Electra",500000,date("l"));
    $LodeTito = new Garage("Tito",10);    
    $LodeTito->MostrarGarage();
    $LodeTito->Add($elsobreviviente);
    echo "<br>";
    echo "<br>";
    $estelar = new Auto("Ford Focus", "Negro", 19500, date("d/m/y"));
    $LodeTito->Add($estelar);
    $conflicto = new Auto("Fiat Siema","Rojo",1050,date("l"));
    $LodeTito->Add($conflicto);        
    $LodeTito->MostrarGarage();
    $LodeTito->Add($conflicto);       
    
    echo "<br>";
    echo "<br>";
      
   echo "<pre>" ;
    $LodeTito->MostrarGarage();
    $LodeTito->add(new Auto("Fiat Duna","Blanco",75000,date("y")));
    $LodeTito->Remove($estelar); 
    $LodeTito->Add($elsobreviviente);
    $LodeTito->add($elacompañante);
    $LodeTito->Remove(new Auto("Fiat Siema","Rojo",1050,date("l")));
    $LodeTito->Remove(new Auto("Fiat Siema","Rojo",25000,date("d-m-y")));
    $LodeTito->MostrarGarage();   
    
    echo "</pre>";
?>