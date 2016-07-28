<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/6/15
 * Time: 10:00 AM
 */
class options extends model
{

    private $id;
    private $option;
    private $isAnswer;
    private $question_id;

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }


}