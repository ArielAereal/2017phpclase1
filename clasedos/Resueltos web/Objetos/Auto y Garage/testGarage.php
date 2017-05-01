<?php
    
    require "Auto.php";
    require "Garage.php";

    echo "Ejercicio Nº 18";

    $elsobreviviente = new Auto("Torino","Tinto",150000,date("d/m/y"));
    $elacompañante = new Auto("BMW","Electra",500000,date("l"));
    $LodeTito = new Garage("Tito",10);    
    $LodeTito->MostrarGarage();
    $LodeTito->Add($elsobreviviente);
    echo "<br><br>";
    $estelar = new Auto("Ford Focus", "Negro", 19500, date("d/m/y"));
    $LodeTito->Add($estelar);
    $conflicto = new Auto("Fiat Siema","Rojo",1050,date("l"));
    $LodeTito->Add($conflicto);        
    $LodeTito->MostrarGarage();
    echo "<br><br>";
    $LodeTito->Add($conflicto);       
    echo "<br><br>";
      
   echo "<pre>" ;
   
    $LodeTito->add(new Auto("Fiat Duna","Blanco",75000,date("y")));
     $LodeTito->MostrarGarage();     
    echo "<br>";
    $LodeTito->Remove($estelar); 
    $LodeTito->Add($elsobreviviente);
    $LodeTito->add($elacompañante);
    echo "<br>";
    echo "<br>";
    echo "<br>";    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $LodeTito->Remove($elsobreviviente);     
    $LodeTito->Remove(new Auto("Fiat Siema","Rojo",25000,date("d-m-y")));
    $LodeTito->MostrarGarage();       
    echo "</pre>";
?>