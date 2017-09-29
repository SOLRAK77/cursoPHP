<?php

namespace app\controllers\admin;
use \app\controllers\BaseController;

class IndexController extends BaseController {
    public function getIndex(){
        return $this->muestra('admin/index.twig');
    }
}

