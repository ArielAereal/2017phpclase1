<?php
    
    abstract class figurageometrica
    {        
        public function __construct()
        {
            
        }

        protected $_color;
        protected $_perimetro;
        protected $_superficie;        
        
        // get
        public function obtenercolor()
        { return $this->_color; }
        // set
        public function establecercolor($elcolor)
        {$this->_color = $elcolor;}
        
        public function ToString()
        {
            echo "<br> Color: " . $this->_color . "<br>";
            echo "<br> Perímetro: " . $this->_perimetro;
            echo "<br> Superficie: " . $this->_superficie;
            
        }

        public abstract function Dibujar();

        protected abstract function CalcularDatos();
                
        }
    

?>