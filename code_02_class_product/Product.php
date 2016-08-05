<?php


class Product
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function list()
    {
        $query = "Select * from products";

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}