<?php

include "Car.php";
include "Truck.php";
include "ToyCar.php";

//
use Vehicles\{Car,Truck,ToyCar};
//use Vehicles\Truck;

echo 'Class Car <br>';
$car = new Car('Carlos');
$car -> move();
echo 'Obteniendo posicion:' . $car->getPos();
echo '<br>';

echo '<br>';
echo '(Publica) Propietario de la Clase Car ' . $car->getOwner();
echo '<br>';
$result = $car -> getMarca(); //
echo '(Privada) Propiedad Marca ' . $result . '<br>';
$car->move();

$car2 = new Truck('Adriana','Estaquita');
echo '<br>';
echo '(Publica) Propietario de la Clase Truck ' . $car2->getOwner() . ' y de tipo '. $car2->type .'<br>';
$car2->move();

$car3 = new Truck('Marisela','Pick-up');
echo '<br>';
echo '(Publica) Propietario de la Clase Truck ' . $car3->getOwner() . ' y de tipo '. $car3->type .'<br>';
$car3->move();

echo '<br>';
echo 'Total de camionetas :' . Truck::$Cuenta;

echo '<br>';
echo '<br>';
//Se guarda lo que el metodo serialize se guardo
$objSeria = serialize($car);

//bverificamos si se transpaso el objeto
$newCar = unserialize($objSeria);
//var_dump($newCar);
echo 'Propietario de Car :' . $newCar->getOwner();

echo '<h4>Toy Car </h4>';

try{
    $toyC = new ToyCar('liliana');
    $toyC->move();

}
catch (Exception $_err)
{
  echo 'El juguete no tiene motor';
}
finally{
    echo '--<br><br>';
}
