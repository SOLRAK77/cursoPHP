<?php

$user = null;
$query = null;

if(!empty($_POST))
{
    require_once 'config1.php';

    try{
        //$qSQL ="SELECT * FROM USUARIOS WHERE EMAIL =:email AND PASSWROD=:password";
        $query ="SELECT * FROM USUARIOS WHERE EMAIL = '". $_POST['email'] . "' AND CONTRASENA='" . MD5($_POST['password']) . "'";
        $qResult = $pdo_conn->query($query);
        $user=$qResult-> fetch(PDO::FETCH_ASSOC);
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
    
    /*
    $QUERY -> EXECUTE([
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ]);
    */
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
            <h1>Login</h1>
            <a href="index.php">Home</a>
            <form action="fake_login.php" method="post">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <br>
                <input type="submit" value="Login">
            </form>
            <H2>
            Query
            </H2>
            <div>
                <?php
                    print_r ($query);
                ?>
            </div>
            <h2>Data</h2>
            <div>
            <?php
                    print_r ($user);
                ?></div>
        </div>
    </body>
</html>