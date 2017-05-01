<?php



/*Notas al creador: el requerimiento me permite crear un vuelo
 sin cantidad máxima de pasajeros, y no puedo modificarla luego... ...*/ 
 


class Vuelo
{
    private $_fecha;
    private $_empresa;
    private $_precio;
    private $_listaDePasajeros;
    private $_cantidadMaxima;


    public function __construct($laempresa,$elprecio,$asientos)
    {
        $this->_empresa = $laempresa;
        $this->_precio = $elprecio; 
        $this->_listaDePasajeros = array();       
        if(isset($asientos)== true)
        {
            $this->_cantidadMaxima = $asientos;
        } else {$asientos = NULL;}
    }   

    public function __call($__construct,$parametros){}

    public function GetMaxAsientos()
    {return $this->_cantidadMaxima;}

    public function TodaLaInformacionDelVuelo()
    {
        $vuelero = $this->_fecha . $this->_empresa . $this->_precio . $this->_cantidadMaxima;

        if (array_values($this->_listaDePasajeros) == NULL)
            {
                $vuelero .="SinPasajerosabordo";
            } else
                {
                foreach ($this->_listaDePasajeros as $value)
                    {
                    $vuelero .= Pasajero::MostrarPasajero($value);
                    }
                }
           
        return $vuelero;
    }
        // lo neceisté para que agregue bien los pasajeros, pero no se por qué... Todavía
       public function Equals($ypasajero)
    {
        $igualdad = false;
        foreach($this->_listaDePasajeros as $valor)
        {   
            if($valor->Equals($ypasajero))
            $igualdad = true;
        }
        return $igualdad;
    }

    public function AgregarPasajero($pasa)
    {
        if($this->Equals($pasa))
             {
                 echo "El pasajero se encuentra sentado en el avión<br><br>";
                 return false;
             } else if(count($this->_listaDePasajeros)==$this->_cantidadMaxima)
             {
                echo "El avion está lleno<br><br>";
                 return false;
             } else
                {
                array_push($this->_listaDePasajeros,$pasa);
                return true;
                }
        }        
        
     public function MostrarVuelo()   
     {
         echo $this->TodaLaInformacionDelVuelo();
     }

     public static function Add($vuelouno,$vuelodos)
     {         
         $recaudaciontotal = 0;
         $listado = $vuelouno->_listaDePasajeros;         

         foreach ($listado as $key => $value)
         {           
            if($value->GetPlusTring() == "SI")
            {
                 $recaudaciontotal += $vuelouno->_precio*0.8;
            } else {$recaudaciontotal += $vuelouno->_precio;}
         }

         $listado = $vuelodos->_listaDePasajeros;
         foreach ($listado as $key => $value)
         {
            if($value->GetPlusTring() == "SI")
            {
                 $recaudaciontotal += $vuelodos->_precio*0.8;
            } else {$recaudaciontotal += $vuelodos->_precio;}
         }        

        return $recaudaciontotal;
     }

      public static function Remove($elVuelo,$unpasajo)   
      {
         $i;
         if($elVuelo->Equals($unpasajo))
         {
              for ($i=0 ; $i < count($elVuelo->_listaDePasajeros) ; $i++) 
                { 
                    if($unpasajo == $elVuelo->_listaDePasajeros[$i])
                    {
                        //SOLUCION
                         unset($elVuelo->_listaDePasajeros[$i]);                            
            
                    }
                }
            
         } else { echo "El pasajero no está en el avión<br><br>";}
        return $elVuelo;
      }
        
}
?>