<?php


namespace Sale\model;
use Sale\model\DataBaseConnect;

class MenuColumn
{
    protected $database;

    public function __construct()
    {
        $db=new DataBaseConnect();
        $this->database=$db->connect();
    }

    public function getAll()
    {
        $sql='select * from menuColumn order by id';
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $array=[];
        foreach ($data as $item){
            $menu=new Menu($item['menuName']);
            $menu->setId($item['id']);
            array_push($array,$menu);
        }
        return $array;
    }

    public function getMenuNameById($id)
    {
        $sql="select menuName from menuColumn where id=$id";
        $stmt=$this->database->query($sql);
        return $stmt->fetch();
    }



}