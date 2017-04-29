<?php

    
    class Garage
    {
        
        private $_razonSocial;
        private $_precioPorHora;
        private $_autos;

        public function __construct($nombre,$precio)
        {
            $this->_razonSocial = $nombre;
             $this->_autos = array();
             if (isset($precio)== false)
             {
                 $this->_precioPorHora = NULL;
             } else {
                    $this->_precioPorHora = $precio;
                    }
            
        }

        public function __call($__construct,$parametros)
        {}

        public function ObtenerRazon()
        {
            return $this->_razonSocial;
        }

        public function ObtenerPrecio()
        {
            return $this->_precioPorHora;
        }

        public function ObtenerAutos()
        {
            return $this->_autos;
        }

        public function SetearAutos($value)
        {
            array_push($this->_autos,$value);
        }

        public function MostrarGarage()
        {
            $cuenta;
            echo "Nombre: " . $this->ObtenerRazon();
            echo "<br> Precio/hora: " . $this->ObtenerPrecio();
            echo "<br>Listado de Autos: <br>";
            if (array_values($this->ObtenerAutos()) == NULL)
            {
                echo "El garage está vacío y listo para usar<br>";
            } else {                
                $cuenta =1;
                foreach ($this->ObtenerAutos() as $value) {
                    echo $cuenta . ")<br>";
                    echo Auto::MostrarAuto($value) . "<br>";                    
                    $cuenta++;
                }
            }
            
        }
              public function Equals($autoacomparar)
    {
        $igualdad = false;
        foreach($this->_autos as $valor)
        {
        if($autoacomparar->Equals($valor) == true)
        {     
          if(true == ($autoacomparar->Color() == $valor->Color()))
        {
          if(true == ($autoacomparar->Precio() == $valor->Precio()))
            {  
                if(true == ($autoacomparar->Fecha() == $valor->Fecha()))
                    {  
                        
                        $igualdad = true;
                    }
            }
        }
        
        }

        }

        return $igualdad;
    }
        
        public function Add($unAuto)
        {

            
            if($this->Equals($unAuto) == true)
            {
                
              echo "El auto ya entró al garage! \o/<br>";     

            } else {$this->SetearAutos($unAuto); }
                
        }

  

    public function Remove($unAuto)
    {
        $i=0;
        $indice;
            if($this->Equals($unAuto)== true)
            {
                foreach($this->_autos as $valor)
                {
                    if ($valor->Equals($unAuto))
                    {
                        $indice = array_keys($this->_autos, $this->_autos[$i]);
                        
                        //var_dump($indice);
                    }
                    $i++;
                }
                // el implode me transforma el array en un string, con el separador o pegamento nulo en este caso
                array_splice($this->_autos, implode("",$indice));
                
            } else {echo "El auto buscado no estaba en el garage<br>";}
    }

    }
    

?>