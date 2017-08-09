<?php

echo '<h1>Estructuras de Controls </h1>';

echo '<h4>IF</h4>';
$cond = 'Amarillo';

if ($cond == 'Blanco')
{
    echo "La variable $cond es igual a blanco";
}
elseif ($cond == 'Negro'){
    echo "La variable $cond es igual a negro";
}
else {
    echo 'La variable $cond es un color diferente a negro o blanco';
}

echo '<br>';
echo '<br>';
$cond = 'Negro';
echo '<h4>SWITCH</h4>';
switch($cond)
{
    case 'Blanco':
        echo "La variable $cond es igual a blanco";
        break;
    case 'Negro':
        echo "La variable $cond es igual a Negro";
        break;
    default:
        echo 'La variable $cond es un color diferente a negro o blanco';
    break;
}
