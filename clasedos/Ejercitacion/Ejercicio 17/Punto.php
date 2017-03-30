<?php

/**
 * 
 */
class Punto
{
    private $_x;
    private $_y;
    
    public function __construct($att1,$att2)
    {
        $this->_x = $att1;
        $this->_y = $att2;
        
    }

    public function GetX()
    {return $this->_x;}

    public function GetY()
    {return $this->_y;}

}



?>