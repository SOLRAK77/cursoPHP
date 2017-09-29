<?php
namespace app\controllers;
//use app\models\blogSposts;

class IndexController extends BaseController{
    
    public function getIndex(){
    ///capc: 29-sep-2017 configurando para usar Eloquent
    //global $pdo_conn;
    ////return 'Route /';
    //$cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
    //$QUERY = $pdo_conn->PREPARE($cadSQL);
    //$QUERY->EXECUTE();

    //$blog_posts = $QUERY->fetchall(\PDO::FETCH_ASSOC);
    //// -> var_dump($blog_posts);
    $blog_posts=\app\models\blogSposts::query()->orderBy('id','desc')->get();

    return $this->muestra('index.twig',['blog_posts' => $blog_posts]);
    //include ;
    }
}