<?php

namespace app\controllers\admin;

class PostController{

    public function getIndex(){
        global $pdo_conn;

        //** admin/post  or admin/post/index
        $cadSQL = "SELECT * FROM BLOG_POST ORDER BY ID DESC";
        $QUERY = $pdo_conn->PREPARE($cadSQL);
        $QUERY->EXECUTE();    
        $blog_posts = $QUERY->fetchall(\PDO::FETCH_ASSOC);        
        return render('../views/admin/post.php',['blog_posts' => $blog_posts]);
    }

    public function getCreate() {
        //** admin/post/create
        return render('../views/admin/insert-post.php');  
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
        return render('../views/admin/insert-post.php',['result'=>$result]);
    }
}