<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/6/15
 * Time: 2:37 PM
 */


class DaoFactory
{
    private static $registry;



    public static function setRegistry($registry)
    {
//        print_r($registry);
        self::$registry = $registry;
    }
    public static function getDao($dao)
    {
        include __SITE_PATH.'/model/dao/'.$dao.'Dao.class.php';
        $daoClass = $dao . 'Dao';
        return new $daoClass(self::$registry);
    }

}