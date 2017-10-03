<?php
//Manejo de inicializacion de errores
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//colocando el route
require_once '../vendor/autoload.php';

//Esta pagina es mi Front controler
//cacp: 28-09-2016
//include_once '../config1.php';

$baseDir = str_replace(basename( $_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseURL = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $baseDir;
define('BASE_URL',$baseURL);

$dotenv = new \Dotenv\Dotenv(__DIR__,'/../.env');
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'sqlsrv',
    'host'      => getenv('BD_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
/*
function render($fileName, $params = [])
{
    ob_start();
    extract($params);
    include $fileName;
    return ob_get_clean();
}
*/
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

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

/*
$router->get('/admin',function() use ($pdo_conn){
    return render('../views/admin/index.php');
});
*/

/*
$router->post('admin/post/create',function() use ($pdo_conn){
    
});
*/

/*
$router->get('/',function() use ($pdo_conn){
    /*return 'Route /';
    $cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
    $QUERY = $pdo_conn->PREPARE($cadSQL);
    $QUERY->EXECUTE();

    $blog_posts = $QUERY->fetchall(pdo::FETCH_ASSOC);
    return render('../views/index.php',['blog_posts' => $blog_posts]);
    //include ;
});
*/
$router->controller('/', app\controllers\IndexController::class);
$router->controller('/admin', app\controllers\admin\IndexController::class);
$router->controller('/admin/post',app\controllers\admin\PostController::class);
$router->controller('/admin/users',app\controllers\admin\UserController::class);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$route);

echo $response;
