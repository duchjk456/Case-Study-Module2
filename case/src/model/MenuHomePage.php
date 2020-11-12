<?php


namespace Sale\model;
use Sale\model\DataBaseConnect;

class MenuHomePage
{
    protected $database;

    public function __construct()
    {
        $db=new DataBaseConnect();
        $this->database=$db->connect();
    }

    public function getAll()
    {
        $sql='select * from menuHomePage order by id';
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

    public function getMenuById($id)
    {
        $sql = 'select menuContent from menuHomePage where id=:id and id!=4';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $menus=$stmt->fetchAll();
        return $menus;
    }
}