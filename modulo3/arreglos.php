<?php

$array1 = [
    0=>'a',
    1=>'b',
    2=>'c'
];

$array2 = [
    3=>'d',
    4=>'3'
];

$array3 = [
    2=> 'Z',
    3=> 'y'
];

$array4 = [
    0=>'a',
    1=>'b',
    2=>'c'
];

$array5 = [
    1=>'a',
    0=>'b',
    2=>'c'
];


echo "Arreglo1:";
echo '<br>';
var_dump($array1);
echo '<br>';
echo "Arreglo2:";
var_dump($array2);
echo '<br>';
$tArray = $array1 + $array2;
echo '<h4>Resultado de arreglo1 union arreglo 2:</h4><br>';
var_dump($tArray);

echo "Arreglo1:";
echo '<br>';
var_dump($array1);
echo '<br>';
echo "Arreglo3:";
var_dump($array3);
echo '<br>';
$tArray = $array1 + $array3;
echo '<h4>Resultado de arreglo1 union arreglo 3:</h4><br>';
var_dump($tArray);
echo '<br>';
echo "Arreglo1:";
echo '<br>';
var_dump($array1);
echo '<br>';
echo "Arreglo4:";
echo '<br>';
var_dump($array4);
echo '<br>';
$tArray = $array1 == $array4;
echo '<h4>Si arreglo 1 es igual al arreglo 4</h4>';
var_dump($tArray);

echo '<br>';
echo '<h4>Si arreglo 1 es igual al arreglo 4 con el operador triple === </h4>br>';
echo "Arreglo1:";
echo '<br>';
var_dump($array1);
echo '<br>';
echo "Arreglo3:";
var_dump($array3);
echo '<br>';
$tArray = $array1 + $array3;
echo '<h4>Resultado de arreglo1 union arreglo 3:</h4><br>';
var_dump($tArray);
echo '<br>';
echo "Arreglo1:";
echo '<br>';
var_dump($array1);
echo '<br>';
echo "Arreglo4:";
echo '<br>';
var_dump($array4);
echo '<br>';
$tArray = $array1 == $array4;
echo '<h4>Si arreglo 1 es igual al arreglo 4</h4>';
var_dump($tArray);


echo '<br>';
echo '<h4>Si arreglo 1 es igual al arreglo 5 con el operador triple === </h4><br>';
echo "Arreglo1:";
echo '<br>';
var_dump($array1);
echo '<br>';
echo "Arreglo5:";
var_dump($array5);
echo '<br>';
$tArray = $array1 + $array5;
echo '<h4>Resultado de arreglo1 union arreglo 5:</h4><br>';
var_dump($tArray);
echo '<br>';
echo "Arreglo1:";
echo '<br>';
var_dump($array1);
echo '<br>';
echo "Arreglo5:";
echo '<br>';
var_dump($array5);
echo '<br>';
$tArray = $array1 === $array5;
echo '<h4>Si arreglo 1 es igual al arreglo 5</h4>';
var_dump($tArray);