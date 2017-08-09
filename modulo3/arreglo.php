<?php

$arrayVar = ['rojo','verde','blue'];
var_dump($arrayVar);

echo '<br>';
echo '<h2>';
echo 'Asignando valores a indices';
echo'</h2>';
$arrayVar1 = [3 =>'rojo',1 =>'verde',2 =>'blue'];
var_dump($arrayVar1);


echo '<br>';
echo '<h2>';
echo 'Asignando nombre a valores';
echo'</h2>';
$arrayVar2 = ['color1' =>'rojo','color2' =>'verde',3 =>'blue'];
var_dump($arrayVar2);

echo '<br>';
echo '<h2>';
echo 'Leer elementos de forma individual';
echo'</h2>';
var_dump($arrayVar2[3]);
echo '<br>';
var_dump($arrayVar2['color1']);
echo '<br><H3>';
echo 'por posicion de arreglo  -> 0';
echo '<br></H3>';
var_dump($arrayVar[0]);

echo '<br>';
echo '<h2>';
echo 'Leer elementos de forma individual';
echo'</h2>';

