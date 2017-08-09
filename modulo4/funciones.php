<?php

function hola($nombre){
    echo 'Hola ' . $nombre;
    echo '<br>';
}


hola('Alfredo');
hola('Ana');


function suma($a, $b){
    return $a + $b;
}

echo '<h4>La suma de dos valores 12, 13.4</h4>';
$resultado = suma(12, 13.4);
echo "El resultado es-> " . $resultado;



