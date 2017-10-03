<?php

namespace app\controllers\admin;
use \app\controllers\BaseController;
use app\models\users;
use \Sirius\Validation\Validator;


class UserController extends BaseController{

    public function getIndex(){        
        $lstUsuarios=users::all();
        return $this->muestra('/admin/users.twig',['lstUsuarios' => $lstUsuarios]);
        //return $this->muestra('/admin/users.twig');
    }

    public function getCreate() {
        //** admin/user/create
        return $this->muestra('/admin/insert-user.twig');  
    }

    
    public function postCreate(){
        //global $pdo_conn;
        $result = FALSE;
        $errors=[];

        try{
            $validador = new Validator();
            $validador->add('nombre','required');
            $validador->add('email','required');
            $validador->add('email','email');
            $validador->add('password','required');
            if($validador->validate($_POST))
                {
                    $sNombre = $_POST['nombre'];
                    $sCorreo = $_POST['email'];
                    $sContrasena = md5($_POST['password']);

                    $itemUser = new users([
                        'NOMBRE'=>$sNombre,
                        'EMAIL'=> $sCorreo, 
                        'CONTRASENA'=> $sContrasena
                    ]);
                    $itemUser->save();
                    $result = true;
                }
                else
                {
                    $errors = $validador->getMessages();
                }        
            }
            catch(Exception $er)
            {
                echo 'Error:' . $er->getMessage();
            }
        return $this->muestra('/admin/insert-user.twig',['result'=>$result,'errors'=>$errors]);
    }
}