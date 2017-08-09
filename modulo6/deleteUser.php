<?php
require_once 'config1.php';
ini_set('display_errors', 1);
$result = false;

 $ID = $_GET["ID"];

    try{
        $qSQL = "DELETE FROM USUARIOS WHERE ID=:ID";
        $QUERY = $pdo_conn->PREPARE($qSQL);

        $QUERY -> EXECUTE([
            'ID' => $ID
        ]);

    }
    catch(Exception $e)
    {
        echo "Error:" + $e->getMessage();
    }

header("location:listUser.php");
?>
