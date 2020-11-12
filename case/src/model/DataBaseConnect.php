<?php

namespace Sale\model;
use PDO;
class DataBaseConnect
{
    protected $dataBaseName;
    protected $userName;
    protected $password;

    public function __construct()
    {
        $this->dataBaseName='mysql:host=localhost;dbname=WebSale;charset=utf8';
    }

    public function connect()
    {
        return new PDO($this->dataBaseName,$this->userName,$this->password);
    }
}