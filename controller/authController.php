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
                    header('Location: http://localhost/mvc/user');
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
            header('Location: http://localhost/mvc/user_home');
            $this->registry->template->show('user_home');

        }


    }

    public function logout()
    {
        $this->session->isLoggedIn = false;
        $this->session->destroy();
        header('Location: http://localhost/mvc/auth');
        $this->registry->template->show('login');
    }

    /**
     * @all controllers must contain an index method
     */
    public function index()
    {
        $this->registry->template->message = '';
        $this->registry->template->show('login');
    }


}
