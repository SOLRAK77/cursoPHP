<?php

$a = null;

$result = $a ?? '0';

echo '<h1>Valor nulo</h1>';
echo 'En este caso el valor de la variable $a es nulo:<br>';
var_dump($a);

echo '<br>';
echo '<br>';
echo 'Si el valor es nulo por default, podemos asignar algun valor por defualt utilianzo \'??\'<br>';
echo '$result = $a ?? \'0\';<br>';
echo "Valor $result";


