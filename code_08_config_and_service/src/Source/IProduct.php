<?php

namespace Source;


interface IProduct
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getDesc();
    public function setDesc($desc);
}