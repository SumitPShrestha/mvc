<?php
session_start();

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 10/31/15
 * Time: 7:34 PM
 */
class session
{
    private static $instance;

    private function __construct()
    {
        session_start();
    }


    public function __set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * @param $key
     * @return null
     */
    public function __get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public function paramExist($param)
    {
        if (isset($_SESSION[$param])) {
            return true;
        } else
            return false;
    }


    public function destroy()
    {
        $_SESSION = null;
        setcookie(session_name(), '', 0, '/');
        session_destroy();
        session_unset();
        session_write_close();
        session_regenerate_id(true);


    }

    public static function getInstance()
    {
        if (!self::$instance) {

            self::$instance = new session();
        }
        return self::$instance;
    }

}