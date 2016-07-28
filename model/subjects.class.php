<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/13/15
 * Time: 10:46 AM
 */
class subjects extends model
{

    private $id;
    private $subjectName;


    public function __set($property, $value)
    {

        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}