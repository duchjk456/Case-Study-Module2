<?php


namespace Sale\model;


class Admin
{
    protected $adminName;
    protected $pass;

    public function __construct($_adminName,$_pass)
    {
        $this->adminName=$_adminName;
        $this->pass=$_pass;
    }

    /**
     * @return mixed
     */
    public function getAdminName()
    {
        return $this->adminName;
    }

    /**
     * @param mixed $adminName
     */
    public function setAdminName($adminName)
    {
        $this->adminName = $adminName;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

}