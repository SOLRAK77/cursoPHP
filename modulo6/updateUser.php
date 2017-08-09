<?php
require_once 'config1.php';
ini_set('display_errors', 1);
$RESULT =false;

if (!empty($_POST))
{
    $id = $_POST['id'];
    $newName = $_POST['name'];
    $newEmail = $_POST['email']; 
    
    TRY
    {
        $qSQL = "UPDATE USUARIOS SET NOMBRE=:NAME, EMAIL=:EMAIL WHERE ID=:ID";
        $QUERY=$pdo_conn->PREPARE($qSQL);

        $RESULT = $QUERY->EXECUTE(
            [
                'NAME' => $newName,
                'EMAIL' => $newEmail,
                'ID' => $id
            ]
        );
    }
    catch(Exception $e)
    {
        echo 'Erro:' . $e->getMessage();
    }

    $NOMBRE = $newName;
    $EMAIL = $newEmail;
}
else
{
    $ID = $_GET["ID"];
    $qSQL = "SELECT * FROM USUARIOS WHERE ID=:ID";
    $QUERY = $pdo_conn->PREPARE($qSQL);

    $QUERY -> EXECUTE([
        'ID' => $ID
    ]);

    $itemRow = $QUERY->fetch(PDO::FETCH_ASSOC);
    $NOMBRE = $itemRow['NOMBRE'];
    $EMAIL = $itemRow['EMAIL'];
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
            <h1>Edit User</h1>            
            <a href=index.php>Home</a>
            <?php
                if ($RESULT){
                   echo '<div class="alert alert-success">Registro actualizado</div>';
                }
            ?>
            <form action="updateUser.php" method="post" >
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo "$NOMBRE" ?>">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo "$EMAIL" ?>">
                <br>
                <input type="hidden" name="id" id="id" value="<?php echo $ID ?>">
                <input type="submit" value="update">
            </form>  
        </div>
    </body>
</html>