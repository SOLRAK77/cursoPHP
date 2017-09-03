<?php

require_once ('../blog/vendor/autoload.php');

$loader = new Twig_Loader_Array(array('index' => 'Hello {{name}}',));

$twig = new Twig_Environment($loader);

$params =[
    'name' => 'gente del futuro',
    'saludo' => 'bienvidos al portal con twig'
];

echo $twig->render('index',$params);


