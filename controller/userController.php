<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/11/15
 * Time: 10:08 PM
 */
class userController extends baseController
{


    public function register()
    {
        $userInfo = new userInfo();
        $user = new User();

        $user = $user->create(array(
            'username' => RequestMethod::post('username'),
            'password' => RequestMethod::post('password'),
            'isEnabled' => true
        ));
        $userInfo = $userInfo->create(array(
            'name' => RequestMethod::post('name'),
            'isMale' => RequestMethod::post('gender') === "male" ? 1 : -1,
            'Dob' => RequestMethod::post('Dob'),
            'address' => RequestMethod::post('address'),
            'joinedDate' => $dateTime = date("Y-m-d h:i:sa"),
            'user_id' => $user->__get('id')
        ));
        $this->registry->template->name = 'sumit';

        $this->registry->template->show('login');


    }


    /**
     * @all controllers must contain an index method
     */
    public function index()
    {
        $this->registry->template->show('user_home');

    }
}

?>