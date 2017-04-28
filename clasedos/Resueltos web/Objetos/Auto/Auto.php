<?php

class Auto 
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    // ver sobrecarga de constructores
    //php no acepta sobrecargas
   public function Auto ($lamarca,$elcolor,$elprecio,$lafecha)
    {
        if (isset($elprecio)== false)
        {
        $this->_color = $elcolor;
        $this->_marca = $lamarca;
        } else if (isset($lafecha) == false){
         $this->_color = $elcolor;
        $this->_marca = $lamarca;
         $this->_precio = $elprecio;
        } else {
            $this->_color = $elcolor;
        $this->_marca = $lamarca;
         $this->_precio = $elprecio;
            $this->_fecha = $lafecha;
       }
    }

    public function __call($Auto, $argumentos)    
    {
               
    }

    public function Precio()
    {
        return $this->_precio;
    }

    public function EstablecerPrecio($valor)
    {
        $this->_precio = $valor;
    }

        public function Marca()
    {
        return $this->_marca;
    }

     public function Color()
    {
        return $this->_color;
    }

     public function Fecha()
    {
        return $this->_fecha;
    }

    
  

    public function AgregarImpuestos($impuesto)
    {
        $this->EstablecerPrecio($this->Precio() + $impuesto);
    }

    public static function MostrarAuto( $parametroauto)
    {
        echo "Marca: " . $parametroauto->Marca() . "<br>";
        echo "Color: " . $parametroauto->Color() . "<br>";
        echo "Precio: " . $parametroauto->Precio() . "<br>";
        echo "Fecha: " . $parametroauto->Fecha() . "<br>";
    }

    public function Equals($autoacomparar)
    {
        if($this->Marca() === $autoacomparar->Marca())
        {
            return true;

        }else{ return false; }
    }

    public static function Add($autoA,$autoB)
    {
        if($autoA->Equals($autoB))
        {

            if($autoA->Color() == $autoB->Color())
        {

            return ($autoA->Precio() + $autoB->Precio());
            
        }
         
        }
        echo "Los autos son de distinta marca o distinto color.<br>No se pudo realizar la operación<br>";
        return 0;   
    }

}


?>