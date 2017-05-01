<?php

class Pasajero
{
    private $_apellido;
    private $_nombre;
    private $_dni;
    private $_esPlus;
    
    // constructores públicos
    public function __construct($elapellido,$elnombre,$eldni,$estadovip)
    {
        $this->_apellido = $elapellido;
        $this->_nombre = $elnombre;
        $this->_dni = $eldni;
        $this->_esPlus = $estadovip;
    }

    public function GetPlusTring ()
    {
        if($this->_esPlus)
        {return "SI";} else {return "NO";}

    }   

    public function Equals($pasajerocomparo)
    {
        if($this->_dni === $pasajerocomparo->_dni)
        {return true;} else {return false;}
    }
        
    public function GetInfoPasajero()
    {
        $infopasajero = $this->_apellido . $this->_nombre . $this->_dni . $this->GetPlusTring();     
        return $infopasajero;
    }

    public static function MostrarPasajero($passj)
    {
        echo $passj->GetInfoPasajero();
    }
}



?>