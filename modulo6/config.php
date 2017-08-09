<?php
try {
    $usuario = "sa";
    $password = "sa";
    $BaseDatos = "CURSOPHP";
    $serverName = "CARLOS"; 

                $options = array(  "UID" => $usuario,  "PWD" => $password,  "Database" => $BaseDatos);
                $conn = sqlsrv_connect($serverName, $options);

                if( $conn ) {                    
                    
                }else{
                     echo "Connection could not be established.<br />";
                     die( print_r( sqlsrv_errors(), true));
                }

    //sqlsrv_close($conn);
}
catch(Exception $ex)
{
    echo 'Error al conectars';
    echo $ex->getMessage();
}
