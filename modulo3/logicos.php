<?php

$var1 = 1;
$var2 = 1;
$var3 = 2;
$var4 = 3;
$result1 = null;
$result2 = null;

echo '<h1>OPERADORES LOGICOS</h1>';
ECHO 'AND && <BR>';
ECHO 'OR || <BR>';
ECHO 'IGUAL  == <BR>';
ECHO 'DIFERENTE != <BR>';

echo '<H4>Valores de variables </H4>';
echo "Valor 1 -> $var1<br>";
echo "Valor 2 -> $var2<br>";
echo "Valor 3 -> $var3<br>";
echo "Valor 4 -> $var4<br>";
echo '<br>';
echo '<h4>Comparando var1 con var2 operador igual </h4>';
$result1 = $var1 == $var2;
var_dump($result1);
echo '<br>';
echo '<h4>Comparando var1 con var3 operador igual </h4>';
$result1 = $var1 == $var3;
var_dump($result1);
echo '';
echo '<br>';
echo '<h4>Comparando var1 con var2 operador AND \'&&\' </h4>';
$result1 = $var1 == $var2;
var_dump($result1);
echo '';
echo '<br>';
echo '<h4>Comparando var1 = 1 o var2 = 6 operador OR \'||\' </h4>';
$result1 = $var1 == 1 || $var2 == 6;
var_dump($result1);
echo '';
