<?php

/**
 * 
 */
class triangulo extends figurageometrica
{
    protected $altura;
    protected $base;

     

    function __construct($level1,$level2)
    {
        parent::__construct();
        $this->altura = $level1;
        $this->base = $level2;

        triangulo::CalcularDatos();
    }   

   protected function CalcularDatos()
    {
        $this->_perimetro = $this->base+$this->base+$this->base;

        $this->_superficie = $this->base*$this->altura/2;
    }

    public function Dibujar()
    {
        // ver color
        // usar un array para determinar los dibujos
        echo "*";

    }

    public function ToString()
    {
        echo parent::obtenercolor();
        echo $altura;
        echo $base;
        triangulo::Dibujar();
    }


}


?>