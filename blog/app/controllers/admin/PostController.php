<?php

namespace app\controllers\admin;
use \app\controllers\BaseController;

class PostController extends BaseController{

    public function getIndex(){
        global $pdo_conn;

        //** admin/post  or admin/post/index
        $cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
        $QUERY = $pdo_conn->PREPARE($cadSQL);
        $QUERY->EXECUTE();    
        $blog_posts = $QUERY->fetchall(\PDO::FETCH_ASSOC);        
        return $this->muestra('/admin/post.twig',['blog_posts' => $blog_posts]);
    }

    public function getCreate() {
        //** admin/post/create
        return $this->muestra('/admin/insert-post.twig');  
    }

    public function postCreate(){
        global $pdo_conn;
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
        return $this->muestra('/admin/insert-post.twig',['result'=>$result]);
    }
}