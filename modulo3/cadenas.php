<?php

$intVar = 5;
echo $stringVar;

echo '<H1>MANEJO DE CADENAS</H1>';
echo '<br>';
echo 'con comillas simples';
echo '<br>';
$stringVar = 'hello $intVar';
echo $stringVar;

echo '<br>';
echo 'con comillas simples';
echo '<br>';
$stringVar = "'hello $intVar ";
echo $stringVar;

echo '<br>';
echo '<br>';
$newVar = 5;
echo 'Se crea una variable $newVar con valor a 5';
echo '<br> valor:';
echo $newVar;
echo '<br>';
echo 'Ahora a la variable newVar se le asigna un valor en cadena ' ;
echo '<br>';
$newVar = 'Hola mundo ';
echo $newVar;

echo '<br>';
echo '<br>';
echo "<h2>Contatenando cadenas que es con el punto '.' </h2>";
echo '<br>';
echo 'stringVar + $newVar';
echo '<br>';
echo $stringVar . $newVar;


