<?php
//Manejo de inicializacion de errores
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//colocando el route
require_once '../vendor/autoload.php';

//Esta pagina es mi Front controler
include_once '../config1.php';

$baseDir = str_replace(basename( $_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseURL = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $baseDir;
define('BASE_URL',$baseURL);

function render($fileName, $params = [])
{
    ob_start();
    extract($params);
    include $fileName;
    return ob_get_clean();
}

$route = $_GET['route'] ?? '/';
/*
switch($route){
    case '/':
        require '../index.php';
        break;
    case '/admin':
        require '../admin/index.php';
        break;
    case '/admin/post':
        require '../admin/post.php';
        break;    
}
*/
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

//echo $router;
//die();

$router->get('/admin',function() use ($pdo_conn){
    return render('../views/admin/index.php');
});

$router->get('/admin/post',function() use ($pdo_conn){
    $cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
    $QUERY = $pdo_conn->PREPARE($cadSQL);
    $QUERY->EXECUTE();    
    $blog_posts = $QUERY->fetchall(pdo::FETCH_ASSOC);
    
    return render('../views/admin/post.php',['blog_posts' => $blog_posts]);
});

$router->get('admin/post/create',function(){
    return render('../views/admin/insert-post.php');
});

$router->post('admin/post/create',function() use ($pdo_conn){
    $result = FALSE;
    
        $sTitle = $_POST['title'];
        $sContent = $_POST['inContenido'];
    
        try{
        $casSql = "INSERT INTO BLOG_POST (TITULO,CONTENIDO ) VALUES (:title, :content)";
        $query= $pdo_conn->prepare($casSql);
    
        $result= $query->execute(
            [
                'title'=>$sTitle,
                'content'=> $sContent 
            ]
        );
    
        }
        catch(Exception $er)
        {
            echo 'Erro:' . $er->getMessage();
        }
    return render('../views/admin/insert-post.php',['result'=>$result]);
});

$router->get('/',function() use ($pdo_conn){
    //return 'Route /';
    $cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
    $QUERY = $pdo_conn->PREPARE($cadSQL);
    $QUERY->EXECUTE();

    $blog_posts = $QUERY->fetchall(pdo::FETCH_ASSOC);
    return render('../views/index.php',['blog_posts' => $blog_posts]);
    //include ;
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$route);

echo $response;
