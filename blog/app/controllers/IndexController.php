<?php
namespace app\controllers;

class IndexController extends BaseController{
    
    public function getIndex(){
    global $pdo_conn;
    //return 'Route /';
    $cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
    $QUERY = $pdo_conn->PREPARE($cadSQL);
    $QUERY->EXECUTE();

    $blog_posts = $QUERY->fetchall(\PDO::FETCH_ASSOC);
    //var_dump($blog_posts);
    return $this->muestra('index.twig',['blog_posts' => $blog_posts]);
    //include ;
    }

}