<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 10/27/15
 * Time: 8:39 PM
 *
 */
 abstract class model
{

    public function getProperties()
    {
        $reflect = new ReflectionClass($this);
//        print_r("class------" .$reflect);
        return $reflect->getProperties(ReflectionProperty::IS_PRIVATE);
    }

}