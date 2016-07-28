<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/12/15
 * Time: 9:49 PM
 */
class RequestMethod
{
    private
    function __construct()
    {
        // do nothing
    }

    private
    function __clone()
    {
        // do nothing
    }

    public
    static function get($key, $default = "")
    {

        if (!empty($_GET[$key])) {
            return filter_var($_GET[$key], FILTER_SANITIZE_STRING);
        }
        return $default;
    }

    public static function post($key, $default = "")
    {
        if (!empty($_POST[$key])) {
            if (is_array($_POST[$key])) {
                return $_POST[$key];
            }
            else{

            return filter_var($_POST[$key], FILTER_SANITIZE_STRING);
            }
        }
        return $default;
    }

    public static function server($key, $default = "")
    {
        if (!empty($_SERVER[$key])) {
            return $_SERVER[$key];
        }
        return $default;
    }

    public static function cookie($key, $default = "")
    {
        if (!empty($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        return $default;
    }


}