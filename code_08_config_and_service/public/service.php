<?php


$container['conn'] = function($c){
    return new \Source\Conn($c['dsn'],$c['user'],$c['pass']);
};

$container['product'] = function(){
    return new \Source\Product;
};

$container['ServiceProduct'] = function($c){
    return new \Source\ServiceProduct($c['conn'],$c['product']);
};