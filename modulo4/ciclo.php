<?php

echo '<h1>estructuras de ciclo</h1>';

echo '<h4>For</h4>';

for ($item =0; $item <= 10; $item++)
{
    echo "El valor de item: $item <br>";
}

echo '<h4>while</h4>';
echo 'While (condicion) ..ciclo';

$item = 0;
while ($item <= 10)
{
    echo "El valor de item: $item <br>";
    $item++;
}

echo '<h4>while 2</h4>';
echo 'do .. ciclo.. while(condicion)';

$item = 0;
do
{
    echo "El valor de item: $item <br>";
    $item++;
} while($item <= 10);

echo '<h4>foreach</h4>';
echo 'do .. ciclo.. while(condicion)';
ECHO 'declaramos un arreglo <br>';
$arreglo = ['uno','dos','tres','cuatro'];
var_dump($arreglo);
echo '<br>';

foreach($arreglo as $item)
{
    echo 'El valor de item ' . $item . '<br>';
}

echo '<h6>Incluyendo las llaves</h6>';

foreach($arreglo as $key => $item)
{
    echo 'El valor de item ' . $key . ' - ' . $item . '<br>';
}
