<?php

class triangulo extends figurageometrica
{
    protected $altura;
    protected $base;     

    function __construct($altura,$base)
    {
        parent::__construct();
        $this->altura = $altura;
        $this->base = $base;
        $this->establecercolor("red");

        $this->CalcularDatos();
    }   

        // inicializa perimetro y superficie
   protected function CalcularDatos()
    {
        $this->_perimetro = $this->base+$this->base+$this->base;
        $this->_superficie = $this->base*$this->altura/2;
    }

    public function Dibujar()
    {
        // hecho a pedal para no demorar, valga la rebundancia XD

        echo "<br>";
        $i=0;
        $j;        

       

        if ($this->base == 3)
        {
             echo "_*_" . "<br>";
        for($j=$this->base;$j>1;$j--)
        {
            
            if($j == $this->base)
            {
                for ($i=0;$i<$this->base;$i++)
                {
                    echo "*";
                }
            }
        }

        }      

        if ($this->base == 4)
        {
            echo "__*_" . "<br>";
            if($this->altura == 3)
            {
                echo "_**_" . "<br>";
            }

        for($j=$this->base;$j>1;$j--)
        {
            
            if($j == $this->base)
            {
                for ($i=0;$i<$this->base;$i++)
                {
                    echo "*";
                }
            }
        }

        }

        if ($this->base == 5)
        {
            echo "__*__" . "<br>";
            if($this->altura == 3)
            {
                echo "_***_" . "<br>";
            }

        for($j=$this->base;$j>1;$j--)
        {
            
            if($j == $this->base)
            {
                for ($i=0;$i<$this->base;$i++)
                {
                    echo "*";
                }
            }
        }

        }
       
    }

    public function ToString()
    {
        parent::ToString();
        echo "<br> Perímetro: " . $this->_perimetro;
        echo "<br> Superficie: " . $this->_superficie;
        echo "<br> Altura: " . $this->altura;
        echo "<br> Lado Base: " . $this->base . "<br>" ;
        
        $this->Dibujar();
    }


}


?>