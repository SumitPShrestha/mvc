<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/28/15
 * Time: 1:20 PM
 */
class question extends model
{

    private $id;
    private $question;
    private $type;
    private $subject;
    private $difficultyLevel;
//    private $options = array();


    public function __construct($registry=null)
    {
        if ($registry!=null) {
        parent::__construct($registry) ;

        }

    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property,$value)
    {
        $this->$property = $value;
    }



}