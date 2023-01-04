<?php

interface Database
{
    public function listProduct();
    public function addProduct();
    public function editProduct();
}

class MysqlDB implements Database
{
    public function listProduct()
    {
    }

    public function addProduct()
    {
        echo "Adicionando com MySQL";
    }

    public function editProduct()
    {
    }
}

class OracleDB implements Database
{
    public function listProduct()
    {
    }

    public function addProduct()
    {
        echo "Adicionando com Oracle";
    }

    public function editProduct()
    {
    }
}

class MongoDB implements Database
{
    public function listProduct()
    {
    }

    public function addProduct()
    {
        echo "Adicionando com MongoDB";
    }

    public function editProduct()
    {
    }
}

$db = new MysqlDB();

$db->addProduct();
