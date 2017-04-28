<?php

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
    
    public function Rectangulo($vert1,$vert3)
    {
        $this->_vertice1 =$vert1;
        $this->_vertice3=$vert3;
        $this->_vertice2= new Punto($vert1->GetX(),$vert3->GetY());
        $this->_vertice4= new Punto($vert3->GetX(),$vert1->GetY());
        
        $this->ladoUno = $this->_vertice2->GetY() -  $this->_vertice1->GetY();
        $this->ladoDos = $this->_vertice4->GetX() -  $this->_vertice1->GetX();

        $this->perimetro = $this->ladoUno + $this->ladoUno + $this->ladoDos + $this->ladoDos;
        $this->area = $this->ladoUno * $this->ladoDos;
    }

    public function QuieroVertice1()
    {
        return $this->_vertice1;   
    }

    public function QuieroVertice2()
    {
        return $this->_vertice2;   
    }
    public function QuieroVertice3()
    {
        return $this->_vertice3;   
    }
    public function QuieroVertice4()
    {
        return $this->_vertice4;   
    }

    public function Dibujar()
    {
        
        echo "Coordenada X del vértice uno: " . $this->QuieroVertice1()->GetX() . "<br>Coordenada Y del vértice uno: " . $this->QuieroVertice1()->GetY() . "<br>";
        echo "Coordenada X del vértice dos: " . $this->QuieroVertice2()->GetX() . "<br>Coordenada Y del vértice dos:  " . $this->QuieroVertice2()->GetY() . "<br>";
        echo "Coordenada X del vértice tres: " . $this->QuieroVertice3()->GetX() . "<br>Coordenada Y del vértice tres:  " . $this->QuieroVertice3()->GetY() . "<br>";
        echo "Coordenada X del vértice cuatro: " . $this->QuieroVertice4()->GetX() . "<br>Coordenada Y del vértice cuatro:  " . $this->QuieroVertice4()->GetY() . "<br>";
        echo "Longitud del lado uno: " . $this->ladoUno."<br>";
        echo "Longitud del lado dos: " . $this->ladoDos."<br>";
        echo "Área: " . $this->area."<br>";
        echo "Perímetro: " . $this->perimetro."<br>";
        echo "<br>"."<br>"."<br>";

        $i=0;
        
        $achicar = $this->ladoDos;
        
        for ($i=0; $i<$this->ladoUno;$i++)
        {
            echo "*";
        }
        echo "<br>";

        if($achicar >2)
        {
            do{

            echo "*";
            for ($i=2; $i<$this->ladoUno;$i++)
        {
            echo "_";
        }
            echo "*<br>";            
            $achicar--;
        } while ($achicar >2);

        }
        //bottom
        for ($i=0; $i<$this->ladoUno;$i++)
        {
            echo "*";
        }

        
    }
}


?>