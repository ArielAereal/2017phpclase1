<?php
    
    abstract class figurageometrica
    {        
        public function __construct()
        {
            
        }

        // el diagrama de clases muestra que la superficie y el perimetro son atributos de figura geometrica
        // pero son utilizados en las clases derivadas. Por lo tanto no deberían ser inicializados en el constructor
        // de figura geometrica

        protected $_color;
        
        
        // get
        public function obtenercolor()
        { return $this->_color; }
        // set
        public function establecercolor($elcolor)
        {$this->_color = $elcolor;}
        
        public function ToString()
        {
            echo "<br> Color: " . $this->_color . "<br>";
            
            
        }

        public abstract function Dibujar();

        protected abstract function CalcularDatos();
                
        }
    

?>