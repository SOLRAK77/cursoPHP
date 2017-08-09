<?php

echo '<h3>Operador = </h3>';
$oper1 = 10;
$oper2 = 12;

echo "si valor $oper1 es igual a $oper2";
$result = $oper1 == $oper2;
echo '<br>';
echo "resultado es: " . var_dump($result);
echo '<br>';
echo '<br>';
echo '<h3>Operador = </h3>';
$oper1 = 10;
$oper2 = '10';

echo "si valor $oper1 es igual a $oper2 (cadena)";
$result = $oper1 == $oper2;
echo '<br>';
var_dump($result);

echo '<br>';
echo '<h3>Operador = </h3>';
$oper1 = 10;
$oper2 = 10.0;

echo "si valor $oper1 es igual a $oper2";
$result = $oper1 == $oper2;
echo '<br>';
var_dump($result);
