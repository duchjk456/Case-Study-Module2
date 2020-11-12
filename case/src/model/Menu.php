<?php


namespace Sale\model;


class Menu
{
    protected $id;
    protected $menuName;
    protected $menuContent;
    public function __construct($menu)
    {
        $this->menuName=$menu;
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
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * @param mixed $menuName
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }

    /**
     * @return mixed
     */
    public function getMenuContent()
    {
        return $this->menuContent;
    }

    /**
     * @param mixed $menuContent
     */
    public function setMenuContent($menuContent)
    {
        $this->menuContent = $menuContent;
    }

}