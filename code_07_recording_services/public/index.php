<?php

require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['conn'] = function(){
    return new \Source\Conn("mysql:host=localhost;dbname=test_oo","root","root");
};

$container['product'] = function($c){
    return new \Source\Product($c['conn']);
};

$list = $container['product']->list();

var_dump($list);
