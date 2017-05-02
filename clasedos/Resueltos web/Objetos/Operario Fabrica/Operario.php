<?php

// el operario nunca recibe salario alguno, cayó en la trampa de laburar gratis.
// el 2000000000% de 0 es igual a NULL...

// no puedo redeclarar el método Mostrar, según php
class Operario
{
    private $_apellido;
    private $_legajo;
    private $_nombre;

    private $_salario;
    
    public function __construct($ellegajo,$elapellido,$elnombre)
    {
        $this->_legajo = $ellegajo;
        $this->_apellido = $elapellido;
        $this->_nombre = $elnombre;
        //agrego para probar
        // salario minimo vital y movil...
        $this->_salario = 2;
    }
        
    /* en el diagrama de clases, la firma del metodo recibe
       dos parametros. En la descripcion solo necesita uno...
    */
    public function Equals($operaCompa)
    {
        $salida = false;
        
        if($this->_legajo == $operaCompa->_legajo)
        {     
          if($this->GetNombreApellido()== $operaCompa->GetNombreApellido())
            {$salida = true;}
        }

        return $salida;
    }

    public function GetNombreApellido()
    {return $this->_nombre . "," . $this->_apellido;}

    public function GetSalario()
    {return $this->_salario;}    

    
    public function MostrarOpera()
    {
        return $this->_legajo . $this->GetNombreApellido() . $this->_salario;
    }

    public static function Mostrar($opera)
    {
        return $opera->MostrarOpera();
    }



    public function SetAumentarSalario($elaumento)
    {$this->_salario += $this->_salario*$elaumento/100;}
}

?>