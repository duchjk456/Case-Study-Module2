<?php


namespace Sale\model;
class OrderModel
{
    protected $database;

    public function __construct()
    {
        $db=new DataBaseConnect();
        $this->database=$db->connect();
    }

    public function addOrder($order,$today)
    {
        $sql="insert into orders(productName,quantity,phone,orderDate) values(:productName,:quantity,:phone,:orderDate)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':productName',$order->getProductName());
        $stmt->bindParam(':quantity',$order->getQuantity());
        $stmt->bindParam(':phone',$order->getPhone());
        $stmt->bindParam(':orderDate',$today);
        $stmt->execute();
    }
}