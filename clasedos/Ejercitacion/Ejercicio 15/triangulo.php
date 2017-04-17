<?php

class triangulo extends figurageometrica
{
    protected $altura;
    protected $base;     

    function __construct($level1,$level2)
    {
        parent::__construct();
        $this->altura = $level1;
        $this->base = $level2;
        $this->establecercolor("red");

        $this->CalcularDatos();
    }   

   protected function CalcularDatos()
    {
        $this->_perimetro = $this->base+$this->base+$this->base;
        $this->_superficie = $this->base*$this->altura/2;
    }

    public function Dibujar()
    {
        // preguntar como dibujar a color
        $tamañoejex = $this->base;
        $tamañoejey = $this->altura;
        $ejex = array(" "," "," "," "," ");
        $ejey = array(" "," "," "," "," ");
        $i;
        $j;
        

        for($i=0;$i<count($tamañoejex);$i++)
        {
           $ejex[$i] = 0;
        }

        for($j=0;$j<count($tamañoejey);$j++)
           {
               $ejey[$j] = 0;
           }

           echo ('<pre>');
           var_dump($ejex);
           var_dump($ejey);
           echo ('</pre>');
    }

    public function ToString()
    {
        parent::ToString();
        echo "<br> Altura: " . $this->altura;
        echo "<br> Lado Base: " . $this->base . "<br>" ;

        echo
        $this->Dibujar();
    }


}


?>