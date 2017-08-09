<?php
require_once 'config1.php';
ini_set('display_errors', 1);

$cadSql = "SELECT * FROM USUARIOS ";
$queryResult = $pdo_conn->query($cadSql);

?>
<html>
    <head>
        <title>Databases with Platzi </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>List User's</h1>            
            <a href="index.php">Home</a>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Editar</th>
                </tr>
                <?php
                while ($row = $queryResult->fetch(PDO::FETCH_ASSOC))
                {
                    echo '<tr>';
                    echo '<td>'.$row['NOMBRE'].'</td>';
                    echo '<td>'.$row['EMAIL'].'</td>';
                    echo '<td><a href="updateUser.php?ID='.$row['ID'].'">Edit</a> <a href="deleteUser.php?ID='.$row['ID'].'">Delete</a></td>';                    
                    echo '<tr>';
                }                
                ?>
            </table>
        </div>
    </body>
</html>