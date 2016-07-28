<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 10/30/15
 * Time: 7:49 PM
 */
interface ISecurityUtils
{
    public function authenticateUser(User $user);

    public function getRoleOfUser($userID);

    public function authorizeUser(User $user);

}