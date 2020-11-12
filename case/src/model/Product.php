<?php


namespace Sale\model;

class Product
{
    protected $id;
    protected $productName;
    protected $price;
    protected $image;
    protected $content;
    protected $belongToMenu;

    public function __construct($_productName,$_price,$_image,$_content)
    {
        $this->productName=$_productName;
        $this->price=$_price;
        $this->image=$_image;
        $this->content=$_content;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getBelongToMenu()
    {
        return $this->belongToMenu;
    }

    /**
     * @param mixed $belongToMenu
     */
    public function setBelongToMenu($belongToMenu)
    {
        $this->belongToMenu = $belongToMenu;
    }

}