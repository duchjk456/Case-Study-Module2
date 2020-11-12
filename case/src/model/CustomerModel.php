<?php


namespace Sale\model;

class CustomerModel
{
    protected $database;
    protected $customer;
    public function __construct()
    {
        $db = new DataBaseConnect();
        $this->database = $db->connect();
    }

    public function addCustomer($customer)
    {
        $sql = "select * from customers where name =:name and address=:address and phone=:phone";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $customer->getName());
        $stmt->bindParam(':address', $customer->getAddress());
        $stmt->bindParam(':phone', $customer->getPhone());
        $stmt->execute();
        $result = $stmt->fetchAll();
        $array=[];
        if ($result == $array) {
            $sql = "insert into customers(customerName,address,phone) values(:name,:address,:phone)";
            $stmt = $this->database->prepare($sql);
            $stmt->bindParam(':name', $customer->getName());
            $stmt->bindParam(':address', $customer->getAddress());
            $stmt->bindParam(':phone', $customer->getPhone());
            $stmt->execute();
        }
    }
}