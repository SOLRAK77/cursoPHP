<?php

class Car{
    public $owner;

    public function __construct($owner)
    {
       $this->owner = $owner;
    }

    private $Marca = "Ford";

    public function move(){
        echo 'moving<br>';
    }


    public function getMarca(){
        return $this->Marca;
    }

    public function setOwner($owner){
        $this->owner = $owner;
    }

    public function getOwner(){
        return $this->owner;
    }

    public function __destruct()
    {
        echo '<br>destruido';
    }
}


echo 'Class Car <br>';
$car = new Car('');
$car2 = new Car('');

$car -> move();

$car->owner = 'Carlos';

echo '<br>';
echo '(Publica) Propietario de la Clase Car ' . $car->owner;
echo '<br>';
$result = $car -> getMarca(); //
echo '(Privada) Propiedad Marca ' . $result . '<br>';

$car->setOwner("Alfredo");
echo '<br>';
echo '(Publica) Propietario de la Clase Car ' . $car->getOwner();

$car2->setOwner("Carlos");
echo '<br>';
echo '(Publica) Propietario de la Clase Car2 ' . $car2->getOwner();

$car3 = new Car('Adriana');
echo '<br>';
echo '(Publica) Propietario de la Clase Car2 ' . $car3->getOwner();
echo '<br>';