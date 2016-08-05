<?php

class Container
{
    public static function getProduct()
   {
       return new Product(self::getConn());
   }

    public static function getConn()
    {
        return new Conn("mysql:host=localhost;dbname=test_oo","root","root");
    }

}