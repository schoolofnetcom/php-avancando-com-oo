<?php

namespace Source;

class Product implements IProduct
{
    private $id;
    private $name;
    private $desc;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function getDesc()
    {
        return $this->desc;
    }


    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }


}