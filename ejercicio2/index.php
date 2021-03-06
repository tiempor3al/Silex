<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app){
    
    //A la variable $respuesta se le asigna un arreglo asociativo. 
    //Ver http://php.net/manual/es/language.types.array.php
    $respuesta = array("hola" => "mundo");

    //Se indica que la respuesta es de tipo JSON
    return $app->json($respuesta);
});

$app->run();
