<?php

// include "Punto.php";

/**
 * 
 */
class Rectangulo
{
    private  $_vertice1;
    private  $_vertice2;
    private  $_vertice3;
    private  $_vertice4;
    public   $ladoUno;
    public   $ladoDos;
    public   $area;
    public   $perimetro;

    //uno 1,1  dos 1,5 cuatro 4,1 tres 4,5
    public function Rectangulo($vert1,$vert3)
    {
        $this->_vertice1 =$vert1;
        $this->_vertice3=$vert3;
        $this->_vertice2= new Punto($vert1->GetX(),$vert3->GetY());
        $this->_vertice4= new Punto($vert3->GetX(),$vert1->GetY());

        
    }

    public function Dibujar()
    {
        echo $ladoUno."<br>";
        echo $ladoDos."<br>";
        echo $area."<br>";
        echo $perimetro."<br>";

        echo "<br>"."<br>"."<br>";

        for
        echo ".  .";
        echo ".  .";
    }
}


?>