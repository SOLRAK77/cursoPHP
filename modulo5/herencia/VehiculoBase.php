<?php

namespace Vehicles;

abstract class VehiculoBase{
    //private $owner;
    protected $owner;

    public function __construct($owner)
    {
       $this->owner = $owner;       
    }

    private $Marca = "Ford";

    public function getMarca(){
        return $this->Marca;
    }

    public function setOwner($owner){
        $this->owner = $owner;
    }

    public function getOwner(){
        return $this->owner;
    }

    public function move(){
        $this->enciendeMotor();
        echo 'car typo: ' . $this->type . ' moving<br>';
    }

    public abstract function enciendeMotor();
}