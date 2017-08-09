<?php

namespace Vehicles;
//importando el codigo de la clase base
require_once 'VehiculoBase.php';

class Truck extends VehiculoBase
{
    public $type;
    public static $Cuenta = 0;

/*
    public function move(){
        $this->enciendeMotor();
        echo 'car typo: ' . $this->type . ' moving<br>';
    }
    */

    public function __construct($ownerName, $type)
    {
        $this->type = $type;
        //parent::__construct($ownerName);
        $this->owner= $ownerName;
       self::$Cuenta++;
       echo "<br>Valor de cc " . self::$Cuenta;
       echo '<br>';
    }

    public function enciendeMotor()
    {
        echo   'Car: enciende motor';
    }
}