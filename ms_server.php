<?php
                $serverName = "CARLOS"; 
                $options = array(  "UID" => "sa",  "PWD" => "sa",  "Database" => "CURSOPHP");
                $conn = sqlsrv_connect($serverName, $options);

                if( $conn ) {
                     echo "Connection established.<br />";

                     $query='select * from test';
                     $result = sqlsrv_query($conn,$query);

                }else{
                     echo "Connection could not be established.<br />";
                     die( print_r( sqlsrv_errors(), true));
                }

            ?>