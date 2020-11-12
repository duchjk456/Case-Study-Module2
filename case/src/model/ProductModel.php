<?php


namespace Sale\model;
use Sale\model\Product;
class ProductModel
{
    protected $database;

    public function __construct()
    {
        $db = new DataBaseConnect();
        $this->database = $db->connect();
    }

    public function getAllProductById($id)
    {
        $sql = 'select * from products where belongToMenu=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $products=$stmt->fetchAll();
        return $products;
    }

    public function getAllProduct()
    {
        $sql = 'select * from products';
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $products=$stmt->fetchAll();
        return $products;
    }

    public function getProductById($id)
    {
        $sql = 'select * from products where id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function searchProductByName($name)
    {
        $sql="select * from products where productName like '$name'";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
        $search_array=[];
        foreach ($result as $item){
            $product= new Product($item['productName'],$item['price'],$item['image'],$item['content']);
            $product->setId($item['id']);
            $product->setBelongToMenu($item['belongToMenu']);
            $search_array[]=$product;
        }
        return $search_array;
    }

    public function cart($id)
    {
        $sql = "select id,productName,price from products where id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();

    }

    public function addProduct($product,$belongToMenu)
    {
        $sql="insert into products(productName,price,image,content,belongToMenu) values (:name,:price,:image,:content,:belongToMenu)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(":name",$product->getProductName());
        $stmt->bindParam(":price",$product->getPrice());
        $stmt->bindParam(":image",$product->getImage());
        $stmt->bindParam(":content",$product->getContent());
        $stmt->bindParam(":belongToMenu",$belongToMenu);
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql="delete from products where id=$id";
        $stmt=$this->database->query($sql);
        $stmt->execute();
    }

    public function updateProduct($product,$belongToMenu)
    {
     $sql="update products set productName=:name,price=:price,image=:image,content=:content,belongToMenu=:belongToMenu where id=:id";
     $stmt=$this->database->prepare($sql);
        $stmt->bindParam(":name",$product->getProductName());
        $stmt->bindParam(":price",$product->getPrice());
        $stmt->bindParam(":image",$product->getImage());
        $stmt->bindParam(":content",$product->getContent());
        $stmt->bindParam(":id",$product->getId());
        $stmt->bindParam(":belongToMenu",$belongToMenu);
        $stmt->execute();
    }
}