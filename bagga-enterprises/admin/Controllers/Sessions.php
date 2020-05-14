<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/23/2017
 * Time: 3:26 PM
 */
class Sessions
{
    function __construct()
    {
        session_start();
    }

    function set($value,$name)
    {
        $_SESSION['email']=$value;
        $_SESSION['name']=$name;
    }

    function getEmail()
    {
        return $_SESSION['email'];
    }

    function getName()
    {
        return $_SESSION['name'];
    }

}