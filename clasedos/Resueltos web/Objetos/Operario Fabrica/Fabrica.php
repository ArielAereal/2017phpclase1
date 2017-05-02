<?php
/*
Remove (de instancia): Recibe a un objeto de tipo Operario y lo 
saca de la fábrica, siempre y cuando el operario se encuentre en 
el Array de tipo Operario. Retorna TRUE si pudo quitar al operario,
FALSE, caso contrario.
*/

class Fabrica
{
    private $_cantMaxOperarios;
    private $_operarios;
    private $_razonSocial;

   public function __construct($larazon)
    {
        $this->_razonSocial = $larazon;
        $this->_cantMaxOperarios = 5;       
        $this->_operarios = array ();        
    }

   public function Add($ario) 
   {  
       $valorderetorno = false;       
       
       if(count($this->_operarios) == $this->_cantMaxOperarios)
         { echo "La fabrica está a full";} else if(Fabrica::Equals($this,$ario))
        {echo "El operado ya está registrado";} else {
            array_push($this->_operarios,$ario);
            $valorderetorno = true;
        }
       
        return $valorderetorno;
   }

   public static function Equals($unafabricacion,$undolape)
   {
       //Retronará un booleano -_-
        $salida = false;

         foreach($unafabricacion->_operarios as $valor)
        {
        if($valor->Equals($undolape) == true)
            { $salida = true;}
        }    

        return $salida;
   }

   // el método no tiene descripción
   public function Mostrar()
   {
    echo "Fabrica de muestra: <br><br>";
    echo "Nombre: " . $this->_razonSocial . "<br>";
    echo $this->MostrarOperarios();
    echo "<br> COSTO TOTAL: ";
    Fabrica::MostrarCosto($this);
   }

   public static function MostrarCosto($lafabrica)
   {
    echo $lafabrica->RetornarCostos();
   }

   private function MostrarOperarios()
   {
       $listaop = $this->_operarios;
         foreach ($listaop as $value)
       {
            echo Operario::Mostrar($value);
       }
    
   }

   public function Remove($ario)
   {
     $i;  
     $valorderetorno = false;              
     
       if(Fabrica::Equals($this,$ario))
        {
            for ($i=0; $i < count($this->_operarios) ; $i++) 
                { 
                    if($ario == $this->_operarios[$i])
                    {
        
                        //SOLUCION
                         unset($this->_operarios[$i]);                            
            
            echo "El operado ya está registrado y ha sido eliminado";
            $valorderetorno = true;
                    }
                }    
        }   else { echo "El operario no se encuentra actualmente en el establecimiento";}
       
        return $valorderetorno;
   }
   
   private function RetornarCostos()
   {
       $listaop = $this->_operarios;
       $costofinal = 0;

       foreach ($listaop as $value)
       {
            $costofinal += $value->GetSalario();
       }

       if($costofinal==0)
       {echo "La fábrica está abandonada<br>";}
       return $costofinal; 
    }


}

?>