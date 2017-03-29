<?php

    /**
     * 
     */
    abstract class figurageometrica
    {
        // public?
        public function __construct()
        {
            
            # code...
        }

        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        // ver propiedades

        //ver modificadores de get y set
        public function obtenercolor()
        { return $this->_color; }

        public function establecercolor($elcolor)
        {$this->color = $elcolor;}

        // virtual
        public function  ToString()
        {
            echo $_color;
            echo $_perimetro;
            echo $_superficie;
            
        }

        public abstract function Dibujar();

        protected abstract function CalcularDatos();
                
    }
    

?>