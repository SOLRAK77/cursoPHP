<?php

namespace app\controllers;
use Twig_Loader_Filesystem;

class BaseController {
    protected $templateEngine;

    public function __constructor(){
        $loader = new Twing_Loader_Filesystem('../views');
        $this->templateEngine = new \Twig_Environment($loader,[
            'debug' => true,
            'cache' => false
        ]);
    }

    public function render($fileName,$data=[]){
        return $this->templateEngine->render($fileName, $data);
    }
}