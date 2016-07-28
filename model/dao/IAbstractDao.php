<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/12/15
 * Time: 10:24 PM
 */
interface IAbstractDao
{
    public function findOne($property,$value);

    public function findAll();

    public function create($object);

    public function update($property, $arrayOfProperties);

    public function delete($property,$value);



}