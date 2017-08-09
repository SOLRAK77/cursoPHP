<?php
require_once 'config1.php';
ini_set('display_errors', 1);
$result = false;

if (!empty($_POST))
    {
        try{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $cadSql = "INSERT INTO USUARIOS (nombre, email, contrasena) VALUES (:name, :email, :password)";
            $query = $pdo_conn->prepare($cadSql);

            $result= $query->execute([
                'name' => $name,
                'email' => $email,
                'password' => $password
            ]); 
        }
        catch(Exception $e)       
        {
            echo 'Error:' . $e->getMessage();
        }
    }
?>
<html>
    <head>
        <title>Databases with Platzi </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Add user's </h1>
            <a href=index.php>Home</a>
            <?php
                if ($result){
                   echo '<div class="alert alert-success">Registro insertado</div>';
                }
            ?>
            <form action="add.php" method="post" >
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <br>
                <input type="submit" value="Save">
            </form>            
        </div>
    </body>
</html>
