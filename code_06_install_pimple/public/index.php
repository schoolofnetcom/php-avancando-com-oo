<?php

require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['date'] = $container->factory(function(){
    return new \DateTime;
});

$date = new \DateTime;

var_dump($container['date']);
echo "<br/>";
echo "<br/>";
sleep(2);
var_dump($container['date']);
