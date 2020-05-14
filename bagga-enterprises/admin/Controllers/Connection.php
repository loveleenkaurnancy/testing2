<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/23/2017
 * Time: 11:15 AM
 */
class Connection
{
    protected $db_name = 'baggaenterprises';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_host = 'localhost';
    public  $db;

    function __construct()
    {
        $this->db = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        if (mysqli_connect_errno()) {
            printf("Connection failed: %s\
			", mysqli_connect_error());
            exit();
        }

        return $this;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->db->close();
    }

    function test_Input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = $this->db->real_escape_string($data);
        return $data;
    }


}