<?php


namespace Sale\model;


class AdminModel
{
    protected $database;

    public function __construct()
    {
        $db=new DataBaseConnect();
        $this->database=$db->connect();
    }

    public function checkAdmin($admin)
    {
        $sql="select *from admin where adminName=:adminName and pass=:pass";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(":adminName",$admin->getAdminName());
        $stmt->bindParam(":pass",$admin->getPass());
        $stmt->execute();
        $result=null;
        $result=$stmt->fetchAll();
        return $result;
    }
}