<?php

class rectangulo extends figurageometrica
{
    protected $ladoflaco;
    protected $ladogordo;     

    function __construct($altura,$base)
    {
        parent::__construct();
        $this->ladoflaco = $altura;
        $this->ladogordo = $base;
        $this->establecercolor("green");

        $this->CalcularDatos();
    }   

        // inicializa perimetro y superficie
   protected function CalcularDatos()
    {
        $this->_perimetro = $this->ladoflaco+$this->ladoflaco+$this->ladogordo+$this->ladogordo;
        $this->_superficie = $this->ladoflaco*$this->ladogordo;
    }

     public function Dibujar()
    {
        $i=0;
        $achicar = $this->ladoflaco;
        //top
        for ($i=0; $i<$this->ladogordo;$i++)
        {
            echo "*";
        }

        echo "<br>";
        
        if($achicar >2)
        {
            do{

            
            echo "*";
            for ($i=2; $i<$this->ladogordo;$i++)
        {
            echo "_";
        }
            echo "*<br>";            
            $achicar--;
        } while ($achicar >2);

        }
        //bottom
        for ($i=0; $i<$this->ladogordo;$i++)
        {
            echo "*";
        }
    }

      public function ToString()
    {
        parent::ToString();
        echo "<br> Perímetro: " . $this->_perimetro;
        echo "<br> Superficie: " . $this->_superficie;
        echo "<br> Corto: " . $this->ladoflaco;
        echo "<br> Base Larga: " . $this->ladogordo . "<br>" ;
        
        $this->Dibujar();
    }
}