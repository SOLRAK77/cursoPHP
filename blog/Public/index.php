<?php
//Manejo de inicializacion de errores
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//Esta pagina es mi Front controler
include_once '../config1.php';

$route = $_GET['route'] ?? '/';

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