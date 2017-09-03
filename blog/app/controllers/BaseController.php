<?php

namespace app\controllers;
use Twig_Loader_Filesystem;
require_once ('../vendor/autoload.php');

class BaseController {
    protected $templateEngine;

    public function __constructor(){
        $loader = new Twig_Loader_Filesystem('../../views');
        $this->templateEngine = new Twig_Environment($loader,[
            'debug' => true,
            'cache' => false 
        ]);
    }

    public function muestra($fileName,$data=[]){        
        return $this->templateEngine->render($fileName, $data);
    }
}