<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/12/15
 * Time: 9:38 AM
 */

include __SITE_PATH.'/model/dao/roleDao.class.php';

class userDao extends abstractDao
{
    private $registry;
    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->registry = $registry;
    }

    public function getUserWithRole($userName)
    {
        $roleDao = new roleDao($this->registry);
       $user = $this->findOne('username', $userName);
        $roles = $roleDao->findOne('user_id', $user->id);
        $user->roles = $roles;
//        $x = 0;
//        foreach ($roles as $role) {
//        $user->roles[$x] =
//            $x++;
//        }


        return $user;

    }

    public function getClass(){
        return 'User';
    }

    public function getTableName(){
        return 'user';
    }
}