<?php

//carga dos veces el archivo
//include 'funcion.php';
//require 'funcion.php';

//**carga dos veces el archivo, **
//**manda error por doble declaracion **
//include 'funcion.php';
//include 'funcion.php';

//**carga dos veces el archivo **
//include_once 'funcion.php';
//include_once 'funcion.php';

//**carga dos veces el archivo **
require_once 'funcion.php';
require_once 'funcion.php';


echo '<p>Es texo es del index.php</p>';

echo suma(12,100.34);