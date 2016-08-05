<?php

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

$product = new Product($db);

$list = $product->list();

var_dump($list);


