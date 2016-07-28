<?php

/**
 * Created by PhpStorm.
 * User: sumit
 * Date: 9/26/15
 * Time: 9:40 PM
 */
include __SITE_PATH . '/model/dao/userDao.class.php';

class authController extends baseController
{


    public function success()
    {

        $this->registry->template->username = $this->session->userName;
        $this->registry->template->show('user_home');

    }

    public function login()
    {
        $userDao = new userDao($this->registry);
        if (!$this->session->isLoggedIn) {
            $user = $userDao->getUserWithRole(RequestMethod::post('username'));

            if ($user->id !== null) {
                $password = $user->password;
                if ($password === RequestMethod::post('password')) {

                    /**
                     *   set user's information in session
                     * */
                    $userRole = array();
                    for ($i = 0; $i < count($user->roles); $i++) {
                        $userRole[$i] = $user->roles[$i]->role;
                    }
                    $this->session->userRole = $userRole;
                    $this->session->isLoggedIn = true;
                    $this->session->userId = $user->id;
                    $this->session->userName = $user->username;

                    $this->registry->template->username = $user->username;
                    $this->registry->template->show('user_home');

                } else {
                    $this->registry->template->show('login');
                }

            } else {
                $this->registry->template->message = 'wrong credentials';
                $this->registry->template->show('login');


            }


        } else {
            print_r($this->session->userRole);
            $id = $this->session->userId;
            $username = $userDao->findOne('id', $this->session->uerId);
            $this->registry->template = $username->username;
            $this->registry->template->show('user_home');

        }


    }

    public function logout()
    {
        $this->registry->template->show('login');
        $this->session->isLoggedIn = false;
        $this->session->destroy();
    }

    /**
     * @all controllers must contain an index method
     */
    public function index()
    {
        $this->registry->template->show('login');
    }


}
