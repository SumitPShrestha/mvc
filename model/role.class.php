<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 10/29/15
 * Time: 7:50 PM
 */
class role extends model
{

    private $id;
    private $role;
    private $user_id;


    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}