<?php

/**
 * 
 */
class Persona
{
    $_apellido;
    $_dni;
    $_nombre;
    $_sexo;

    function __construct($unombre, $uapellido, $udni, $usexo)
    {
        $_apellido = $uapellido;
        $_dni = $udni;
        $_nombre = $unombre;
        $_sexo = $usexo;
    }

    public function ObtenerNombre()
    {
        return $this->_nombre;
    }    

    public function ObtenerApellido()
    {
        return $this->_apellido;
    }    

    public function ObtenerSexo()
    {
        return $this->_sexo;
    }    

    public function ObtenerDni()
    {
        return $this->_dni;
    }    

    public function Hablar($idioma)
    {
        
    }

    public function ToString()
    {
        // string builder

        return $this->ObtenerApellido . $this->ObtenerDni . $this->ObtenerNombre . $this->ObtenerSexo;
    }
}


?>