<?php

namespace Vehicles;
//importando el codigo de la clase base
require_once 'VehiculoBase.php';
require 'Gpstrait.php';

class Car extends VehiculoBase implements \Serializable
{
    use GpsTrait;

    public $type;
    /*
    public function move(){
        echo 'car moving<br>';
    }
    */

    public function enciendeMotor()
    {
        echo 'Car: enciende motor <br>';
    }

    public function serialize(){
        echo 'aplicando serializable <br>';
        return $this->owner;
    }

    public function unserialize($objetoSeri)
    {
        echo 'aplicando un-serializable <br>';
        $this->owner = $objetoSeri;
    }
}

