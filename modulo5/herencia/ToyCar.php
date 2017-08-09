<?php

namespace Vehicles;
//importando el codigo de la clase base
require_once 'VehiculoBase.php';

class ToyCar extends VehiculoBase
{
    public $type = 'Juguete';
    
    public function move(){
        $this->enciendeMotor();
        echo 'car moving<br>';
    }
    

    public function enciendeMotor()
    {
        throw new \Exception("No hay Motor");
    }
}

