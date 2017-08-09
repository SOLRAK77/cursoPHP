<?php
/*
$varf = function(){
    echo 'Este es una funcion anonima';
};
*/

$varA =0;

$varf = function() use ($varA){
    $varA = 1000;
    echo 'Este es una funcion anonima <br>';
    echo 'valor de $varA ' . $varA;
};

$varf();



echo '<p>vamos a realizar el ejemplo de declarar un arreglo</p>';
echo 'A loa elementos del arreglo lo vamos a multiplicar por 2';

$arreglo = [1,2,3,4,5,6];
echo '<br>';
var_dump($arreglo);
echo '<br>';
echo 'utilizamos la funcion array_map para recorrer el arreglo<br>';
echo 'e incluimos una funcion anomina';

$result= array_map(function ($n){
    return $n *2;
}, $arreglo);

echo '<br>';
var_dump($result);

echo '<h2>Ejemplo 2</h2>';
echo '<p>vamos a realizar el ejemplo de declarar un arreglo</p>';
echo 'A loa elementos del arreglo lo vamos a multiplicar por 3 enviado por parametro';

$arreglo1 = [1,2,3,4,5,6];
echo '<br>';
var_dump($arreglo1);
echo '<br>';
echo 'utilizamos la funcion array_map para recorrer el arreglo1<br>';
echo 'e incluimos una funcion anomina';
$multipicador = 3;
$result= array_map(function ($n) use ($multipicador){
    return $n *$multipicador;
}, $arreglo1);

echo '<br>';
var_dump($result);


echo '<h2>Ejemplo 3</h2>';
echo '<p>vamos a realizar el ejemplo de declarar un arreglo</p>';
echo 'A loa elementos del arreglo lo vamos a multiplicar por 4 enviado por parametro<br>';
echo 'le vamos aasignar la funcion a una variable  y esta se pasa como parametro';

$arreglo2 = [1,2,3,4,5,6];
echo '<br>';
var_dump($arreglo2);
echo '<br>';
echo 'utilizamos la funcion array_map para recorrer el arreglo1<br>';
echo 'e incluimos una funcion anomina';
$multipicador = 4;
$funcAnomina = function ($n) use ($multipicador){
    return $n *$multipicador;
};

$result= array_map($funcAnomina, $arreglo2);

echo '<br>';
var_dump($result);