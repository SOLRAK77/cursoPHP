<?php

$dsn ="sqlsrv:database=CURSOPHP;server=CARLOS";
$usuario = "sa";
$contrasena = "sa";

try
{
$pdo_conn = new PDO($dsn,$usuario,$contrasena);
}
catch(Exception $e)
{
    echo $e->getMessage();
}


