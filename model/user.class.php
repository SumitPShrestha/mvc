<?php

/**
 * Created by PhpStorm.
 * User: sumit
 * Date: 10/3/15
 * Time: 10:53 PM
 */
class User extends model
{


    private $id;
    private $username;
    private $password;
    private $isEnabled;
    private $roles = array();




    public function __construct($registry = null){
        if($registry!==null){
        $this->registry = $registry;
        parent::__construct($this->registry);
        }
    }

    public function __set($property, $value){
        $this->$property = $value;

    }

    public function __get($property){
       return $this->$property;
    }


    public function getClass()
    {
        // TODO: Implement getClass() method.
    }
}